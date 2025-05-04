<?php

namespace App\Filament\Clusters\InvenLabH\Resources;

use App\Filament\Clusters\InvenLabH;
use App\Filament\Clusters\InvenLabH\Resources\InventarisSoftwareLaboratoriumHResource\Pages;
use App\Filament\Clusters\InvenLabH\Resources\InventarisSoftwareLaboratoriumHResource\RelationManagers;
use App\Models\Inventaris_Software_Laboratorium_H;
use App\Models\InventarisSoftwareLaboratoriumH;
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

class InventarisSoftwareLaboratoriumHResource extends Resource
{
    protected static ?string $model = Inventaris_Software_Laboratorium_H::class;

    protected static ?string $navigationIcon = 'clarity-application-line';

    protected static ?string $slug = 'software-h';

    protected static ?string $navigationLabel = 'Software';

    protected static ?string $modelLabel = 'Inventaris Laboratorium H';

    protected static ?string $cluster = InvenLabH::class;

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
            'index' => Pages\ListInventarisSoftwareLaboratoriumHS::route('/'),
            // 'create' => Pages\CreateInventarisSoftwareLaboratoriumH::route('/create'),
            // 'edit' => Pages\EditInventarisSoftwareLaboratoriumH::route('/{record}/edit'),
        ];
    }
}
