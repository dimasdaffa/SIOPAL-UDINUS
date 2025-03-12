<?php

namespace App\Filament\Clusters\InvenLabH\Resources\InventarisNonPCLaboratoriumHResource\Pages;

use App\Filament\Clusters\InvenLabH\Resources\InventarisNonPCLaboratoriumHResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisNonPCLaboratoriumH extends CreateRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumHResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
