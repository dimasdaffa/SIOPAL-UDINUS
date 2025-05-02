<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisNonPCLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisNonPCLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisNonPCLaboratoriumG extends CreateRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumGResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
