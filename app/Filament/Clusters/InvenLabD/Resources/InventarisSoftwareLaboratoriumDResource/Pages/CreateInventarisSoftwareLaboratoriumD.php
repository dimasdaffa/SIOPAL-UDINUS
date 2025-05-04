<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisSoftwareLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisSoftwareLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisSoftwareLaboratoriumD extends CreateRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumDResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
