<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisPCLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisPCLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisPCLaboratoriumC extends CreateRecord
{
    protected static string $resource = InventarisPCLaboratoriumCResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
