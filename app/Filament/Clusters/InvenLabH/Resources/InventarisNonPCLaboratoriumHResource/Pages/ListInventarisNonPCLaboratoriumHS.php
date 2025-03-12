<?php

namespace App\Filament\Clusters\InvenLabH\Resources\InventarisNonPCLaboratoriumHResource\Pages;

use App\Filament\Clusters\InvenLabH\Resources\InventarisNonPCLaboratoriumHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumHS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
