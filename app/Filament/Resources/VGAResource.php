<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\Hardware;
use App\Filament\Resources\VGAResource\Pages;
use App\Filament\Resources\VGAResource\RelationManagers;
use App\Models\VGA;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VGAResource extends Resource
{
    protected static ?string $model = VGA::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $slug = 'vga';

    protected static ?string $navigationLabel = 'Data VGA';

    protected static ?string $modelLabel = 'VGA';

    protected static ?string $navigationGroup = 'DATA HARDWARE';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Dibuat otomatis di model
                    ->dehydrated(false), // Tidak dikirim ke backend, karena sudah diisi otomatis

                TextInput::make('merk')
                    ->label('Merk')
                    ->required()
                    ->maxLength(255),

                TextInput::make('tipe')
                    ->label('Tipe VGA')
                    ->required()
                    ->maxLength(255),

                TextInput::make('kapasitas')
                    ->label('Kapasitas VRAM (GB)')
                    ->numeric()
                    ->minValue(1)
                    ->required(),

                Textarea::make('spesifikasi')
                    ->label('Spesifikasi')
                    ->rows(4)
                    ->maxLength(500)
                    ->required(),

                Select::make('tahun')
                    ->label('Tahun')
                    ->options(function () {
                        $tahunSekarang = date('Y');
                        return array_combine(
                            range($tahunSekarang, $tahunSekarang - 20),
                            range($tahunSekarang, $tahunSekarang - 20)
                        );
                    })
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('no_inventaris')
                    ->label('No Inventaris')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('merk')
                    ->label('Merk')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tipe')
                    ->label('Tipe VGA')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kapasitas')
                    ->label('Kapasitas VRAM (GB)')
                    ->sortable()
                    ->formatStateUsing(fn($state) => number_format($state) . ' GB'),

                TextColumn::make('spesifikasi')
                    ->label('Spesifikasi')
                    ->limit(50) // Batasi tampilan agar tidak terlalu panjang
                    ->tooltip(fn($record) => $record->spesifikasi),

                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVGAS::route('/'),
            'create' => Pages\CreateVGA::route('/create'),
            'edit' => Pages\EditVGA::route('/{record}/edit'),
        ];
    }
}
