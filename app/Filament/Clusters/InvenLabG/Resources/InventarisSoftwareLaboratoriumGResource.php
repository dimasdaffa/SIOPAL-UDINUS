<?php

namespace App\Filament\Clusters\InvenLabG\Resources;

use App\Filament\Clusters\InvenLabG;
use App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource\Pages;
use App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource\RelationManagers;
use App\Models\Inventaris_Software_Laboratorium_G;
use App\Models\InventarisSoftwareLaboratoriumG;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventarisSoftwareLaboratoriumGResource extends Resource
{
    protected static ?string $model = Inventaris_Software_Laboratorium_G::class;

    protected static ?string $navigationIcon = 'clarity-application-line';

    protected static ?string $slug = 'software-g';

    protected static ?string $navigationLabel = 'Software';

    protected static ?string $modelLabel = 'Inventaris Laboratorium G';

    protected static ?string $cluster = InvenLabG::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Software')
                    ->required()
                    ->maxLength(255),

                TextInput::make('versi')
                    ->label('Versi')
                    ->required()
                    ->maxLength(50),

                Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->rows(3)
                    ->nullable()
                    ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Software')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('versi')
                    ->label('Versi')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->defaultSort('nama', 'asc') // Mengurutkan berdasarkan Nama Software secara alfabetis
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
            'index' => Pages\ListInventarisSoftwareLaboratoriumGS::route('/'),
            // 'create' => Pages\CreateInventarisSoftwareLaboratoriumG::route('/create'),
            // 'edit' => Pages\EditInventarisSoftwareLaboratoriumG::route('/{record}/edit'),
        ];
    }
}
