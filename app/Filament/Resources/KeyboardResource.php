<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\AllHardware;
use App\Filament\Resources\KeyboardResource\Pages;
use App\Filament\Resources\KeyboardResource\RelationManagers;
use App\Models\Keyboard;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KeyboardResource extends Resource
{
    protected static ?string $model = Keyboard::class;

    protected static ?string $navigationIcon = 'clarity-keyboard-line';

    protected static ?string $slug = 'keyboard';

    protected static ?string $navigationLabel = 'Data Keyboard';

    protected static ?string $modelLabel = 'Keyboard';

    protected static ?string $cluster = AllHardware::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 7 ;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Dibuat otomatis di model
                    ->dehydrated(false), // Tidak dikirim ke backend

                TextInput::make('merk')
                    ->label('Merk')
                    ->required()
                    ->maxLength(255),

                Select::make('tipe')
                    ->label('Tipe Keyboard')
                    ->options([
                        'USB' => 'USB',
                        'Wireless' => 'Wireless',
                    ])
                    ->required(),

                Select::make('tahun')
                    ->label('Tahun')
                    ->options(function () {
                        $tahunSekarang = date('Y');
                        return array_combine(
                            range($tahunSekarang, $tahunSekarang - 20),
                            range($tahunSekarang, $tahunSekarang - 20)
                        );
                    })
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

                TextColumn::make('merk')
                    ->label('Merk')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tipe')
                    ->label('Tipe Keyboard')
                    ->sortable(),

                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('tahun')
                    ->label('Filter Tahun')
                    ->options(function () {
                        $tahunSekarang = date('Y');
                        return array_combine(
                            range($tahunSekarang, $tahunSekarang - 20),
                            range($tahunSekarang, $tahunSekarang - 20)
                        );
                    }),
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
            'index' => Pages\ListKeyboards::route('/'),
            'create' => Pages\CreateKeyboard::route('/create'),
            'edit' => Pages\EditKeyboard::route('/{record}/edit'),
        ];
    }
}
