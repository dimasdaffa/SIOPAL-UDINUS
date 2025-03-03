<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaboranResource\Pages;
use App\Filament\Resources\LaboranResource\RelationManagers;
use App\Models\Laboran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaboranResource extends Resource
{
    protected static ?string $model = Laboran::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $slug = 'laboran';

    protected static ?string $navigationLabel = 'Data Laboran';

    protected static ?string $modelLabel = 'Laboran';

    protected static ?string $navigationGroup = 'MASTER DATA';

    protected static ?int $navigationSort = 5 ;

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
            'index' => Pages\ListLaborans::route('/'),
            'create' => Pages\CreateLaboran::route('/create'),
            'edit' => Pages\EditLaboran::route('/{record}/edit'),
        ];
    }
}
