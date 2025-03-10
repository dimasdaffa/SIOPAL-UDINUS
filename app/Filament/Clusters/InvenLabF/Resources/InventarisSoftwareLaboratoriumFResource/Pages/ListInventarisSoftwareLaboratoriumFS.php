<?php

namespace App\Filament\Clusters\InvenLabF\Resources\InventarisSoftwareLaboratoriumFResource\Pages;

use App\Filament\Clusters\InvenLabF\Resources\InventarisSoftwareLaboratoriumFResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumFS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumFResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
