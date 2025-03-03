<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KlasifikasiLabResource\Pages;
use App\Filament\Resources\KlasifikasiLabResource\RelationManagers;
use App\Models\KlasifikasiLab;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KlasifikasiLabResource extends Resource
{
    protected static ?string $model = KlasifikasiLab::class;

    protected static ?string $navigationIcon = 'heroicon-o-server-stack';

    protected static ?string $slug = 'klasifikasi-lab';

    protected static ?string $navigationLabel = 'Data Klasifikasi Lab';

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
            'index' => Pages\ListKlasifikasiLabs::route('/'),
            'create' => Pages\CreateKlasifikasiLab::route('/create'),
            'edit' => Pages\EditKlasifikasiLab::route('/{record}/edit'),
        ];
    }
}
