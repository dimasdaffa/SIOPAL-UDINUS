<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\InvenLabA;
use App\Filament\Resources\InventarisPCLaboratoriumAResource\Pages;
use App\Filament\Resources\InventarisPCLaboratoriumAResource\RelationManagers;
use App\Models\Inventaris_PC_Laboratorium_A;
use App\Models\InventarisPCLaboratoriumA; // Ensure this class exists in the specified namespace
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventarisPCLaboratoriumAResource extends Resource
{
    protected static ?string $model = Inventaris_PC_Laboratorium_A::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $slug = 'pc-a';

    protected static ?string $navigationLabel = 'Laboratorium A';

    protected static ?string $modelLabel = 'Inventaris PC';

    protected static ?string $cluster = InvenLabA::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 10 ;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('motherboard_id')
                    ->label('Motherboard')
                    ->relationship('motherboard', 'merk')
                    ->required()
                    ->preload()//agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a motherboard'),
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
            'index' => Pages\ListInventarisPCLaboratoriumAS::route('/'),
            'create' => Pages\CreateInventarisPCLaboratoriumA::route('/create'),
            'edit' => Pages\EditInventarisPCLaboratoriumA::route('/{record}/edit'),
        ];
    }
}
