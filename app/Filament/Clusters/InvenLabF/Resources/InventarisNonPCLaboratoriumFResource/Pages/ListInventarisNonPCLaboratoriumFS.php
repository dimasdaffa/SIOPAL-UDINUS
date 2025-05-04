<?php

namespace App\Filament\Clusters\InvenLabF\Resources\InventarisNonPCLaboratoriumFResource\Pages;

use App\Filament\Clusters\InvenLabF\Resources\InventarisNonPCLaboratoriumFResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumFS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumFResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
