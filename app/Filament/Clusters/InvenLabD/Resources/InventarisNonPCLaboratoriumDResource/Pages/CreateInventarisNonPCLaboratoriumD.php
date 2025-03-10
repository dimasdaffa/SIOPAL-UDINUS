<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisNonPCLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisNonPCLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisNonPCLaboratoriumD extends CreateRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumDResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
