<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisSoftwareLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisSoftwareLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumB extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumBResource::class;

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
