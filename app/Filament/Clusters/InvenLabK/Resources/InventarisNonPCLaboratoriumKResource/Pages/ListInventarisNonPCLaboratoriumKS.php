<?php

namespace App\Filament\Clusters\InvenLabK\Resources\InventarisNonPCLaboratoriumKResource\Pages;

use App\Filament\Clusters\InvenLabK\Resources\InventarisNonPCLaboratoriumKResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumKS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
