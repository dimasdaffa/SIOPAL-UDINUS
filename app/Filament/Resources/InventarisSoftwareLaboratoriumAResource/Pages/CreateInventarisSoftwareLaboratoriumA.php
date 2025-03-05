<?php

namespace App\Filament\Resources\InventarisSoftwareLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisSoftwareLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInventarisSoftwareLaboratoriumA extends CreateRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumAResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
