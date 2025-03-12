<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisNonPCLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisNonPCLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumGS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumGResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
