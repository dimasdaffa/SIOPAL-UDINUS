<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaboratoriumResource\Pages;
use App\Filament\Resources\LaboratoriumResource\RelationManagers;
use App\Models\Laboratorium;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaboratoriumResource extends Resource
{
    protected static ?string $model = Laboratorium::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $slug = 'laboratorium';

    protected static ?string $navigationLabel = 'Data Laboratorium';

    protected static ?string $navigationGroup = 'MASTER DATA';

    protected static ?int $navigationSort = 4 ;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListLaboratoria::route('/'),
            'create' => Pages\CreateLaboratorium::route('/create'),
            'edit' => Pages\EditLaboratorium::route('/{record}/edit'),
        ];
    }
}
