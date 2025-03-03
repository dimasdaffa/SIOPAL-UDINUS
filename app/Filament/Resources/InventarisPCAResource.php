<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventarisPCAResource\Pages;
use App\Filament\Resources\InventarisPCAResource\RelationManagers;
use App\Models\InventarisPCA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventarisPCAResource extends Resource
{
    protected static ?string $model = InventarisPCA::class;

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    protected static ?string $slug = 'inventaris-pc-a';

    protected static ?string $navigationLabel = 'PC Lab A';

    protected static ?string $label = 'PC Lab A';

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
            'index' => Pages\ListInventarisPCAS::route('/'),
            'create' => Pages\CreateInventarisPCA::route('/create'),
            'edit' => Pages\EditInventarisPCA::route('/{record}/edit'),
        ];
    }
}
