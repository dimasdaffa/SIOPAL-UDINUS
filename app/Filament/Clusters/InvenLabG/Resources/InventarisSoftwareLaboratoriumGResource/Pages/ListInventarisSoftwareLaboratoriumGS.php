<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumGS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumGResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
