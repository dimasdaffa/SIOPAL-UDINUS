<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisSoftwareLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisSoftwareLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumDS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
