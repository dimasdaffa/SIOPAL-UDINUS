<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JamPraktikumResource\Pages;
use App\Filament\Resources\JamPraktikumResource\RelationManagers;
use App\Models\JamPraktikum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JamPraktikumResource extends Resource
{
    protected static ?string $model = JamPraktikum::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    protected static ?string $slug = 'jam-praktikum';

    protected static ?string $navigationLabel = 'Data Jam Praktikum';

    protected static ?string $navigationGroup = 'Master Data';

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
            'index' => Pages\ListJamPraktikums::route('/'),
            'create' => Pages\CreateJamPraktikum::route('/create'),
            'edit' => Pages\EditJamPraktikum::route('/{record}/edit'),
        ];
    }
}
