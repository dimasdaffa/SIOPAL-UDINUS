<?php

namespace App\Filament\Clusters\InvenLabE\Resources\InventarisNonPCLaboratoriumEResource\Pages;

use App\Filament\Clusters\InvenLabE\Resources\InventarisNonPCLaboratoriumEResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisNonPCLaboratoriumE extends CreateRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumEResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
