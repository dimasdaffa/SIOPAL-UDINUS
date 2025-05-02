<?php

namespace App\Filament\Resources\InventarisSoftwareLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisSoftwareLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumA extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumAResource::class;

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
