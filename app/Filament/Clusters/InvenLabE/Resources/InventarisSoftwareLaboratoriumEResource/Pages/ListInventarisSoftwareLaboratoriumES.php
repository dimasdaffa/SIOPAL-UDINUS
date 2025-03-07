<?php

namespace App\Filament\Clusters\InvenLabE\Resources\InventarisSoftwareLaboratoriumEResource\Pages;

use App\Filament\Clusters\InvenLabE\Resources\InventarisSoftwareLaboratoriumEResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumES extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
