<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisPCLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisPCLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumC extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumCResource::class;

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
