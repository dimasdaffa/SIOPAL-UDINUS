<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\AllHardware;
use App\Filament\Clusters\Hardware;
use App\Filament\Resources\RAMResource\Pages;
use App\Filament\Resources\RAMResource\RelationManagers;
use App\Models\RAM;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RAMResource extends Resource
{
    protected static ?string $model = RAM::class;

    protected static ?string $navigationIcon = 'fluentui-ram-20';

    protected static ?string $slug = 'ram';

    protected static ?string $navigationLabel = 'RAM';

    protected static ?string $modelLabel = 'RAM';

    protected static ?string $cluster = AllHardware::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 5 ;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Dibuat otomatis di model
                    ->dehydrated(false), // Tidak dikirim ke backend, karena sudah diisi otomatis

                TextInput::make('merk')
                    ->label('Merk')
                    ->required()
                    ->maxLength(255),

                Select::make('tipe')
                    ->label('Tipe RAM')
                    ->options([
                        'DDR3' => 'DDR3',
                        'DDR4' => 'DDR4',
                        'DDR5' => 'DDR5',
                    ])
                    ->required(),

                TextInput::make('kapasitas')
                    ->label('Kapasitas (GB)')
                    ->numeric()
                    ->minValue(1)
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
                    ->label('Tipe RAM')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kapasitas')
                    ->label('Kapasitas (GB)')
                    ->sortable()
                    ->numeric(),
            ])
            ->filters([
                SelectFilter::make('tipe')
                    ->label('Filter Tipe RAM')
                    ->options([
                        'DDR3' => 'DDR3',
                        'DDR4' => 'DDR4',
                        'DDR5' => 'DDR5',
                    ]),
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
            'index' => Pages\ListRAMS::route('/'),
            'create' => Pages\CreateRAM::route('/create'),
            'edit' => Pages\EditRAM::route('/{record}/edit'),
        ];
    }
}
