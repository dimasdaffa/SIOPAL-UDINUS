<?php

namespace App\Filament\Clusters\InvenLabK\Resources\InventarisPCLaboratoriumKResource\Pages;

use App\Filament\Clusters\InvenLabK\Resources\InventarisPCLaboratoriumKResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumKS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
