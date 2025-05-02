<?php

namespace App\Filament\Clusters\InvenLabL\Resources\InventarisNonPCLaboratoriumLResource\Pages;

use App\Filament\Clusters\InvenLabL\Resources\InventarisNonPCLaboratoriumLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumLS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
