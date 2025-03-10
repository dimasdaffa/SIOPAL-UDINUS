<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisSoftwareLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisSoftwareLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumC extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumCResource::class;

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
