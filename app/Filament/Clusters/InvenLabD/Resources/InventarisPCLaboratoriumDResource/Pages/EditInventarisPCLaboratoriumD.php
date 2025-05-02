<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisPCLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisPCLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumD extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumDResource::class;

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
