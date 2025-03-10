<?php

namespace App\Filament\Clusters\InvenLabF\Resources\InventarisPCLaboratoriumFResource\Pages;

use App\Filament\Clusters\InvenLabF\Resources\InventarisPCLaboratoriumFResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumFS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumFResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
