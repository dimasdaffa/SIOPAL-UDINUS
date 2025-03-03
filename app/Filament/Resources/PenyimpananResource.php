<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\AllHardware;
use App\Filament\Resources\PenyimpananResource\Pages;
use App\Filament\Resources\PenyimpananResource\RelationManagers;
use App\Models\Penyimpanan;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\NumericColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenyimpananResource extends Resource
{
    protected static ?string $model = Penyimpanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    protected static ?string $slug = 'penyimpanan';

    protected static ?string $navigationLabel = 'Data Penyimpanan';

    protected static ?string $modelLabel = 'Penyimpanan';

    // protected static ?string $navigationGroup = 'DATA HARDWARE';

    protected static ?string $cluster = AllHardware::class;

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

                Select::make('tipe')
                    ->label('Tipe')
                    ->options([
                        'SSD' => 'SSD',
                        'HDD' => 'HDD',
                    ])
                    ->required(),

                TextInput::make('kapasitas')
                    ->label('Kapasitas (GB)')
                    ->numeric()
                    ->minValue(1)
                    ->required(),

                Textarea::make('spesifikasi')
                    ->label('Spesifikasi')
                    ->rows(4)
                    ->maxLength(500)
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

                TextColumn::make('merk')
                    ->label('Merk')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tipe')
                    ->label('Tipe')
                    ->colors([
                        'primary' => 'SSD',
                        'warning' => 'HDD',
                    ]),

                TextColumn::make('kapasitas')
                    ->label('Kapasitas (GB)')
                    ->sortable()
                    ->formatStateUsing(fn($state) => number_format($state) . ' GB'),

                TextColumn::make('spesifikasi')
                    ->label('Spesifikasi')
                    ->limit(50) // Biar tidak terlalu panjang
                    ->wrap()
                    ->tooltip(fn($record) => $record->spesifikasi),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('tipe')
                    ->options([
                        'SSD' => 'SSD',
                        'HDD' => 'HDD',
                    ])
                    ->label('Filter Tipe'),
            ])
            ->defaultSort('no_inventaris', 'asc')
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
            'index' => Pages\ListPenyimpanans::route('/'),
            'create' => Pages\CreatePenyimpanan::route('/create'),
            'edit' => Pages\EditPenyimpanan::route('/{record}/edit'),
        ];
    }
}
