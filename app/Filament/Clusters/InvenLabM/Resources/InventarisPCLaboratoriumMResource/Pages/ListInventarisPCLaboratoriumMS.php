<?php

namespace App\Filament\Clusters\InvenLabM\Resources\InventarisPCLaboratoriumMResource\Pages;

use App\Filament\Clusters\InvenLabM\Resources\InventarisPCLaboratoriumMResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumMS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
