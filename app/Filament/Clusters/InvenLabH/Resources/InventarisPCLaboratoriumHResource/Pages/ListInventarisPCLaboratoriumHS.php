<?php

namespace App\Filament\Clusters\InvenLabH\Resources\InventarisPCLaboratoriumHResource\Pages;

use App\Filament\Clusters\InvenLabH\Resources\InventarisPCLaboratoriumHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumHS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
