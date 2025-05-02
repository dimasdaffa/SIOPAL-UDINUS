<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisNonPCLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisNonPCLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisNonPCLaboratoriumB extends CreateRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumBResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
