<?php

namespace App\Filament\Clusters\InvenLabE\Resources\InventarisPCLaboratoriumEResource\Pages;

use App\Filament\Clusters\InvenLabE\Resources\InventarisPCLaboratoriumEResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumES extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
