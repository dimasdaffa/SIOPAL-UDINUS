<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisPCLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisPCLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumBS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumBResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
