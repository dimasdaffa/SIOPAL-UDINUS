<?php

namespace App\Filament\Resources\InventarisNonPCLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisNonPCLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisNonPCLaboratoriumA extends CreateRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumAResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
