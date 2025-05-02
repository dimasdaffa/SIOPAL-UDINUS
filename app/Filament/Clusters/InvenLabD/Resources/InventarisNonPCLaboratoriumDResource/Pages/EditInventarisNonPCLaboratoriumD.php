<?php

namespace App\Filament\Clusters\InvenLabD\Resources\InventarisNonPCLaboratoriumDResource\Pages;

use App\Filament\Clusters\InvenLabD\Resources\InventarisNonPCLaboratoriumDResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumD extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumDResource::class;

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
