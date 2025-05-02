<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisNonPCLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisNonPCLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumCS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
