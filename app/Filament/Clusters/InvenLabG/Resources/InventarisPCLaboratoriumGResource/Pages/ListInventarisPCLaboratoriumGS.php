<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisPCLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisPCLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumGS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumGResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
