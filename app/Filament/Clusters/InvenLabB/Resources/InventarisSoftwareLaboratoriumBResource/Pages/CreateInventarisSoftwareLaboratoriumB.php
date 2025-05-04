<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisSoftwareLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisSoftwareLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisSoftwareLaboratoriumB extends CreateRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumBResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
