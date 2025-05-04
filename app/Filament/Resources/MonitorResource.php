<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\AllHardware;
use App\Filament\Resources\MonitorResource\Pages;
use App\Filament\Resources\MonitorResource\RelationManagers;
use App\Models\Monitor;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
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

class MonitorResource extends Resource
{
    protected static ?string $model = Monitor::class;

    protected static ?string $navigationIcon = 'mdi-monitor-small';

    protected static ?string $slug = 'monitor';

    protected static ?string $navigationLabel = 'Monitor';

    protected static ?string $modelLabel = 'Monitor';

    protected static ?string $cluster = AllHardware::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 9 ;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_inventaris')
                    ->label('No Inventaris')
                    ->disabled() // Dibuat otomatis di model
                    ->dehydrated(false), // Tidak dikirim ke backend karena sudah diisi otomatis

                TextInput::make('merk')
                    ->label('Merk')
                    ->required()
                    ->maxLength(255),

                TextInput::make('nama')
                    ->label('Nama Monitor')
                    ->required()
                    ->maxLength(255),

                TextInput::make('resolusi')
                    ->label('Resolusi (px)')
                    ->minValue(1)
                    ->required(),

                Select::make('ukuran')
                    ->label('Ukuran Layar')
                    ->options([
                        '19"' => '19"',
                        '21"' => '21"',
                        '24"' => '24"',
                        '27"' => '27"',
                        '32"' => '32"',
                    ])
                    ->required(),

                Textarea::make('spesifikasi')
                    ->label('Spesifikasi')
                    ->rows(4)
                    ->maxLength(500)
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
                    ->searchable()
                    ->sortable(),

                TextColumn::make('merk')
                    ->label('Merk')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nama')
                    ->label('Nama Monitor')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('resolusi')
                    ->label('Resolusi (px)')
                    ->sortable(),

                TextColumn::make('ukuran')
                    ->label('Ukuran Layar')
                    ->sortable(),

                TextColumn::make('spesifikasi')
                    ->label('Spesifikasi')
                    ->limit(50) // Menampilkan hanya 50 karakter pertama
                    ->tooltip(fn($record) => $record->spesifikasi),

                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable(),

            ])
            ->filters([
                SelectFilter::make('ukuran')
                    ->label('Ukuran Layar')
                    ->options([
                        '19"' => '19"',
                        '21"' => '21"',
                        '24"' => '24"',
                        '27"' => '27"',
                        '32"' => '32"',
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
            'index' => Pages\ListMonitors::route('/'),
            'create' => Pages\CreateMonitor::route('/create'),
            'edit' => Pages\EditMonitor::route('/{record}/edit'),
        ];
    }
}
