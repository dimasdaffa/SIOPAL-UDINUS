<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisNonPCLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisNonPCLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisNonPCLaboratoriumC extends CreateRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumCResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
