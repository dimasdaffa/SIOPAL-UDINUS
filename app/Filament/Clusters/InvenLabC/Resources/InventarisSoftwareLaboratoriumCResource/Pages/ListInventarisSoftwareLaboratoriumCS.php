<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisSoftwareLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisSoftwareLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumCS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
