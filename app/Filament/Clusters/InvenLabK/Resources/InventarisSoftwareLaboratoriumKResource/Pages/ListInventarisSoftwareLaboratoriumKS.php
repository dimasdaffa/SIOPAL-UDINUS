<?php

namespace App\Filament\Clusters\InvenLabK\Resources\InventarisSoftwareLaboratoriumKResource\Pages;

use App\Filament\Clusters\InvenLabK\Resources\InventarisSoftwareLaboratoriumKResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumKS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
