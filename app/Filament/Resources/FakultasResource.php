<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FakultasResource\Pages;
use App\Filament\Resources\FakultasResource\RelationManagers;
use App\Models\Fakultas;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FakultasResource extends Resource
{
    protected static ?string $model = Fakultas::class;

    // protected static ?string $navigationIcon = 'heroicon-o-building-library';

    // protected static ?string $navigationLabel = 'Data Fakultas';

    // protected static ?string $navigationGroup = 'MASTER DATA';

    // protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_fakultas')
                    ->label('Kode Fakultas')
                    ->maxLength(6)
                    ->unique(Fakultas::class, 'kode_fakultas')
                    ->required(),

                TextInput::make('nama_fakultas')
                    ->label('Nama Fakultas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_fakultas')->label('Kode Fakultas')->sortable()->searchable(),
                TextColumn::make('nama_fakultas')->label('Nama Fakultas')->sortable()->searchable(),
            ])
            ->filters([])
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
            'index' => Pages\ListFakultas::route('/'),
            // 'create' => Pages\CreateFakultas::route('/create'),
            // 'edit' => Pages\EditFakultas::route('/{record}/edit'),
        ];
    }
}
