<?php

namespace App\Filament\Exports;

use App\Models\Inventaris_PC_Laboratorium_A;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class InventarisPCLaboratoriumAExporter extends Exporter
{
    protected static ?string $model = Inventaris_PC_Laboratorium_A::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('id')
            //     ->label('ID'),
            ExportColumn::make('no_inventaris')
                ->label('No Inventaris'),
            ExportColumn::make('motherboard.full_name')
                ->label('Motherboard'),
            ExportColumn::make('processor.full_name')
                ->label('Processor'),
            ExportColumn::make('penyimpanan.full_name')
                ->label('Penyimpanan'),
            ExportColumn::make('vga.full_name')
                ->label('VGA'),
            ExportColumn::make('ram.full_name')
                ->label('RAM'),
            ExportColumn::make('dvd.merk')
                ->label('DVD'),
            ExportColumn::make('keyboard.full_name')
                ->label('Keyboard'),
            ExportColumn::make('mouse.full_name')
                ->label('Mouse'),
            ExportColumn::make('monitor.full_name')
                ->label('Monitor'),
            ExportColumn::make('headphone.full_name')
                ->label('Headphone'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your inventaris PC laboratorium A export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
