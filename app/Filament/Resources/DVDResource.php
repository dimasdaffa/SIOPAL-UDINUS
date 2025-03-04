<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\AllHardware;
use App\Filament\Resources\DVDResource\Pages;
use App\Filament\Resources\DVDResource\RelationManagers;
use App\Models\DVD;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DVDResource extends Resource
{
    protected static ?string $model = DVD::class;

    protected static ?string $navigationIcon = 'clarity-cd-dvd-line';

    protected static ?string $slug = 'dvd';

    protected static ?string $navigationLabel = 'Data DVD';

    protected static ?string $modelLabel = 'DVD';

    protected static ?string $cluster = AllHardware::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 6 ;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Dibuat otomatis di model
                    ->dehydrated(false), // Tidak dikirim ke backend karena otomatis di-generate

                TextInput::make('dvd')
                    ->label('DVD')
                    ->required()
                    ->maxLength(255),

                TextInput::make('merk')
                    ->label('Merk')
                    ->required()
                    ->maxLength(255),

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
                TextColumn::make('no_inventaris')
                    ->label('No Inventaris')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('dvd')
                    ->label('DVD')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('merk')
                    ->label('Merk')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('spesifikasi')
                    ->label('Spesifikasi')
                    ->limit(50)
                    ->tooltip(fn($record) => $record->spesifikasi),

                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('tahun')
                    ->label('Filter Tahun')
                    ->options(function () {
                        $tahunSekarang = date('Y');
                        return array_combine(
                            range($tahunSekarang, $tahunSekarang - 20),
                            range($tahunSekarang, $tahunSekarang - 20)
                        );
                    }),
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
            'index' => Pages\ListDVDS::route('/'),
            'create' => Pages\CreateDVD::route('/create'),
            'edit' => Pages\EditDVD::route('/{record}/edit'),
        ];
    }
}
