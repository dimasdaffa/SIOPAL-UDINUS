<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisPCLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisPCLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumB extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumBResource::class;

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
