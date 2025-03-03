<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\AllHardware;
use App\Filament\Resources\MotherboardResource\Pages;
use App\Filament\Resources\MotherboardResource\RelationManagers;
use App\Models\Motherboard;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MotherboardResource extends Resource
{
    protected static ?string $model = Motherboard::class;

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    protected static ?string $slug = 'motherboard';

    protected static ?string $navigationLabel = 'Data Motherboard';

    protected static ?string $modelLabel = 'Motherboard';

    // protected static ?string $navigationGroup = 'DATA HARDWARE';

    protected static ?string $cluster = AllHardware::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('no_inventaris')
                ->label('No Inventaris')
                ->disabled() // Tidak bisa diedit manual, otomatis terisi
                ->dehydrated(false),

            TextInput::make('merk')
                ->label('Merk')
                ->required()
                ->maxLength(255),

            TextInput::make('tipe')
                ->label('Tipe')
                ->required()
                ->maxLength(255),

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

            TextColumn::make('merk')
                ->label('Merk')
                ->searchable()
                ->sortable(),

            TextColumn::make('tipe')
                ->label('Tipe')
                ->searchable()
                ->sortable(),

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
            'index' => Pages\ListMotherboards::route('/'),
            'create' => Pages\CreateMotherboard::route('/create'),
            'edit' => Pages\EditMotherboard::route('/{record}/edit'),
        ];
    }
}
