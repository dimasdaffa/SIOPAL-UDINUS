<?php

namespace App\Filament\Clusters\InvenLabJ\Resources\InventarisSoftwareLaboratoriumJResource\Pages;

use App\Filament\Clusters\InvenLabJ\Resources\InventarisSoftwareLaboratoriumJResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumJS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumJResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
