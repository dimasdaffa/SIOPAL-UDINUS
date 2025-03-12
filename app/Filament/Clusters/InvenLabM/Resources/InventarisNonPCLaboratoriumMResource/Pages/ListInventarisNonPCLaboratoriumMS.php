<?php

namespace App\Filament\Clusters\InvenLabM\Resources\InventarisNonPCLaboratoriumMResource\Pages;

use App\Filament\Clusters\InvenLabM\Resources\InventarisNonPCLaboratoriumMResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumMS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
