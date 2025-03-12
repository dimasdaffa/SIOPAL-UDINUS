<?php

namespace App\Filament\Clusters\InvenLabM\Resources;

use App\Filament\Clusters\InvenLabM;
use App\Filament\Clusters\InvenLabM\Resources\InventarisNonPCLaboratoriumMResource\Pages;
use App\Filament\Clusters\InvenLabM\Resources\InventarisNonPCLaboratoriumMResource\RelationManagers;
use App\Models\Inventaris_Non_PC_Laboratorium_M;
use App\Models\InventarisNonPCLaboratoriumM;
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

class InventarisNonPCLaboratoriumMResource extends Resource
{
    protected static ?string $model = Inventaris_Non_PC_Laboratorium_M::class;

    protected static ?string $navigationIcon = 'fluentui-box-24-o';

    protected static ?string $cluster = InvenLabM::class;

    protected static ?string $slug = 'non-pc-m';

    protected static ?string $navigationLabel = 'Non-PC';

    protected static ?string $modelLabel = 'Inventaris Laboratorium M';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Otomatis dari sistem
                    ->dehydrated(false), // Tidak dikirim ke backend

                TextInput::make('nama')
                    ->label('Nama Barang')
                    ->required()
                    ->maxLength(255),

                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required(),

                Select::make('kondisi')
                    ->label('Kondisi')
                    ->options([
                        'Baik' => 'Baik',
                        'Sedang' => 'Sedang',
                        'Rusak' => 'Rusak',
                    ])
                    ->required(),

                TextInput::make('keterangan')
                    ->label('Keterangan')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_inventaris')
                    ->label('No Inventaris')
                    ->searchable(),

                TextColumn::make('nama')
                    ->label('Nama Barang')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jumlah')
                    ->label('Jumlah')
                    ->sortable(),

                TextColumn::make('kondisi')
                    ->label('Kondisi')
                    ->sortable()
                    ->badge() // Memberikan tampilan badge di tabel

                    ->color(fn($state) => match ($state) {
                        'Baik' => 'success',
                        'Sedang' => 'warning',
                        'Rusak' => 'danger',
                    }),

                TextColumn::make('keterangan')
                    ->label('Keterangan'),
            ])
            ->filters([
                SelectFilter::make('kondisi')
                    ->label('Filter Kondisi')
                    ->options([
                        'Baik' => 'Baik',
                        'Sedang' => 'Sedang',
                        'Rusak' => 'Rusak',
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
            'index' => Pages\ListInventarisNonPCLaboratoriumMS::route('/'),
            // 'create' => Pages\CreateInventarisNonPCLaboratoriumM::route('/create'),
            // 'edit' => Pages\EditInventarisNonPCLaboratoriumM::route('/{record}/edit'),
        ];
    }
}
