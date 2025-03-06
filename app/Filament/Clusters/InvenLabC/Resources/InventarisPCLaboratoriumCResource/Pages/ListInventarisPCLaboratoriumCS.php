<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisPCLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisPCLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumCS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
