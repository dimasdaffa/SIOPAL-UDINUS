<?php

namespace App\Filament\Clusters\InvenLabJ\Resources\InventarisNonPCLaboratoriumJResource\Pages;

use App\Filament\Clusters\InvenLabJ\Resources\InventarisNonPCLaboratoriumJResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumJS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumJResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
