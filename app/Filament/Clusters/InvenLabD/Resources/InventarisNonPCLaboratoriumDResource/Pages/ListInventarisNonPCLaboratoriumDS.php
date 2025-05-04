<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisNonPCLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisNonPCLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumDS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
