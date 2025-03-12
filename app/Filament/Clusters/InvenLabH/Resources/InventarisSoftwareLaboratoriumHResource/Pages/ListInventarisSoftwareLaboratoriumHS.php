<?php

namespace App\Filament\Clusters\InvenLabH\Resources\InventarisSoftwareLaboratoriumHResource\Pages;

use App\Filament\Clusters\InvenLabH\Resources\InventarisSoftwareLaboratoriumHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumHS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
