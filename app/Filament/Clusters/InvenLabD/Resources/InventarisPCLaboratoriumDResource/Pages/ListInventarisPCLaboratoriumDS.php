<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisPCLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisPCLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumDS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
