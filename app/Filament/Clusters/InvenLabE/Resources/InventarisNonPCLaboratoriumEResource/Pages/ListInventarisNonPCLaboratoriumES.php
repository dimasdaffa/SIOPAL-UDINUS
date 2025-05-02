<?php

namespace App\Filament\Clusters\InvenLabE\Resources\InventarisNonPCLaboratoriumEResource\Pages;

use App\Filament\Clusters\InvenLabE\Resources\InventarisNonPCLaboratoriumEResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumES extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
