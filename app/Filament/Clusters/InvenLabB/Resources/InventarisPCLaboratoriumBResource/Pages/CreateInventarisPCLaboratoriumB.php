<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisPCLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisPCLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisPCLaboratoriumB extends CreateRecord
{
    protected static string $resource = InventarisPCLaboratoriumBResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
