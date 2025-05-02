<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisSoftwareLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisSoftwareLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumBS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumBResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
