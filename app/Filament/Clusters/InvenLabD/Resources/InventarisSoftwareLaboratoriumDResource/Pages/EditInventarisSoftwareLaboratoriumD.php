<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisSoftwareLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisSoftwareLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumD extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumDResource::class;

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
