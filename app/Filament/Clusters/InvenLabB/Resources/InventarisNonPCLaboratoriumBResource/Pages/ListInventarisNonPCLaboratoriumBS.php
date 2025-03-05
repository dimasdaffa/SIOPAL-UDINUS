<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisNonPCLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisNonPCLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumBS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumBResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
