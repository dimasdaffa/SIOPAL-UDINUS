<?php

namespace App\Filament\Resources\InventarisPCLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisPCLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumA extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
