<?php

namespace App\Filament\Clusters\InvenLabI\Resources\InventarisSoftwareLaboratoriumIResource\Pages;

use App\Filament\Clusters\InvenLabI\Resources\InventarisSoftwareLaboratoriumIResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumIS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
