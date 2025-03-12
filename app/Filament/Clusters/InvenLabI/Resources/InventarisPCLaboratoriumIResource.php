<?php

namespace App\Filament\Clusters\InvenLabI\Resources;

use App\Filament\Clusters\InvenLabI;
use App\Filament\Clusters\InvenLabI\Resources\InventarisPCLaboratoriumIResource\Pages;
use App\Filament\Clusters\InvenLabI\Resources\InventarisPCLaboratoriumIResource\RelationManagers;
use App\Models\Inventaris_PC_Laboratorium_I;
use App\Models\InventarisPCLaboratoriumI;
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

class InventarisPCLaboratoriumIResource extends Resource
{
    protected static ?string $model = Inventaris_PC_Laboratorium_I::class;

    protected static ?string $navigationIcon = 'clarity-computer-solid';

    protected static ?string $cluster = InvenLabI::class;

    protected static ?string $slug = 'pc-i';

    protected static ?string $navigationLabel = 'PC';

    protected static ?string $modelLabel = 'Inventaris Laboratorium I';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Dibuat otomatis di model
                    ->dehydrated(false), // Tidak dikirim ke backend
                Select::make('motherboard_id')
                    ->label('Motherboard')
                    ->relationship('motherboard', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a motherboard'),
                Select::make('processor_id')
                    ->label('Processor')
                    ->relationship('processor', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a processor'),
                Select::make('penyimpanan_id')
                    ->label('Penyimpanan')
                    ->relationship('penyimpanan', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a penyimpanan'),
                Select::make('vga_id')
                    ->label('VGA')
                    ->relationship('vga', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a VGA'),
                Select::make('ram_id')
                    ->label('RAM')
                    ->relationship('ram', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a RAM'),
                Select::make('dvd_id')
                    ->label('DVD')
                    ->relationship('dvd', 'merk')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a DVD'),
                Select::make('keyboard_id')
                    ->label('Keyboard')
                    ->relationship('keyboard', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a Keyboard'),
                Select::make('mouse_id')
                    ->label('Mouse')
                    ->relationship('mouse', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a Mouse'),
                Select::make('monitor_id')
                    ->label('Monitor')
                    ->relationship('monitor', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a Monitor'),
                Select::make('headphone_id')
                    ->label('Headphone')
                    ->relationship('headphone', 'full_name')
                    ->required()
                    ->preload() //agar option select bisa muncul
                    ->searchable()
                    ->placeholder('Select a Headphone'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_inventaris')
                    ->label('No Inventaris')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('motherboard.full_name')
                    ->label('Motherboard')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('processor.full_name')
                    ->label('Processor')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('penyimpanan.full_name')
                    ->label('Penyimpanan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('vga.full_name')
                    ->label('VGA')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('ram.full_name')
                    ->label('RAM')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('dvd.merk')
                    ->label('DVD')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('keyboard.full_name')
                    ->label('Keyboard')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('mouse.full_name')
                    ->label('Mouse')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('monitor.full_name')
                    ->label('Monitor')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('headphone.full_name')
                    ->label('Headphone')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                SelectFilter::make('motherboard_id')
                    ->label('Motherboard')
                    ->relationship('motherboard', 'full_name'),

                SelectFilter::make('processor_id')
                    ->label('Processor')
                    ->relationship('processor', 'full_name'),

                SelectFilter::make('penyimpanan_id')
                    ->label('Penyimpanan')
                    ->relationship('penyimpanan', 'full_name'),

                SelectFilter::make('vga_id')
                    ->label('VGA')
                    ->relationship('vga', 'full_name'),

                SelectFilter::make('ram_id')
                    ->label('RAM')
                    ->relationship('ram', 'full_name'),

                SelectFilter::make('dvd_id')
                    ->label('DVD')
                    ->relationship('dvd', 'merk'),

                SelectFilter::make('keyboard_id')
                    ->label('Keyboard')
                    ->relationship('keyboard', 'full_name'),

                SelectFilter::make('mouse_id')
                    ->label('Mouse')
                    ->relationship('mouse', 'full_name'),

                SelectFilter::make('monitor_id')
                    ->label('Monitor')
                    ->relationship('monitor', 'full_name'),

                SelectFilter::make('headphone_id')
                    ->label('Headphone')
                    ->relationship('headphone', 'full_name'),
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
            'index' => Pages\ListInventarisPCLaboratoriumIS::route('/'),
            // 'create' => Pages\CreateInventarisPCLaboratoriumI::route('/create'),
            // 'edit' => Pages\EditInventarisPCLaboratoriumI::route('/{record}/edit'),
        ];
    }
}
