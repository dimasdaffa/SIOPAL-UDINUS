<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\AllHardware;
use App\Filament\Resources\PSUResource\Pages;
use App\Filament\Resources\PSUResource\RelationManagers;
use App\Models\PSU;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PSUResource extends Resource
{
    protected static ?string $model = PSU::class;

    protected static ?string $navigationIcon = 'mdi-cube';

    protected static ?string $slug = 'psu';

    protected static ?string $navigationLabel = 'PSU';

    protected static ?string $modelLabel = 'PSU';

    protected static ?string $cluster = AllHardware::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 11;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Dibuat otomatis di model
                    ->dehydrated(false),
                Forms\Components\TextInput::make('merk')
                    ->label('Merk')
                    ->required(),
                Forms\Components\TextInput::make('tipe')
                    ->label('Tipe')
                    ->nullable(),
                Forms\Components\TextInput::make('daya')
                    ->label('Daya (Watt)')
                    ->numeric()
                    ->suffix('W')
                    ->required(),
                Forms\Components\TextInput::make('efisiensi')
                    ->label('Efisiensi')
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->label('Tahun')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_inventaris')
                    ->label('No Inventaris')
                    ->searchable(),
                Tables\Columns\TextColumn::make('merk')
                    ->label('Merk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipe')
                    ->label('Tipe'),
                Tables\Columns\TextColumn::make('daya')
                    ->label('Daya (Watt)')
                    ->suffix(' W'),
                Tables\Columns\TextColumn::make('efisiensi')
                    ->label('Efisiensi'),
                Tables\Columns\TextColumn::make('tahun')
                    ->label('Tahun'),
            ])
            ->filters([
                // Add filters if needed
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
            'index' => Pages\ListPSUS::route('/'),
            // 'create' => Pages\CreatePSU::route('/create'),
            // 'edit' => Pages\EditPSU::route('/{record}/edit'),
        ];
    }
}
