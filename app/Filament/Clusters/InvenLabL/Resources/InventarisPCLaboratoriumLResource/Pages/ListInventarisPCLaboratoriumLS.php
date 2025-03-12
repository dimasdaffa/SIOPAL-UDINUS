<?php

namespace App\Filament\Clusters\InvenLabL\Resources\InventarisPCLaboratoriumLResource\Pages;

use App\Filament\Clusters\InvenLabL\Resources\InventarisPCLaboratoriumLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumLS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
