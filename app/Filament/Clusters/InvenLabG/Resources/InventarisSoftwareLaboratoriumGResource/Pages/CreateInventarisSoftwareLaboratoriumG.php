<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisSoftwareLaboratoriumG extends CreateRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumGResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
