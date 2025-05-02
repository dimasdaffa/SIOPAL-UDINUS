<?php

namespace App\Filament\Clusters\InvenLabF\Resources\InventarisSoftwareLaboratoriumFResource\Pages;

use App\Filament\Clusters\InvenLabF\Resources\InventarisSoftwareLaboratoriumFResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisSoftwareLaboratoriumF extends CreateRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumFResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
