<?php

namespace App\Filament\Clusters\InvenLabL\Resources\InventarisSoftwareLaboratoriumLResource\Pages;

use App\Filament\Clusters\InvenLabL\Resources\InventarisSoftwareLaboratoriumLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumLS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
