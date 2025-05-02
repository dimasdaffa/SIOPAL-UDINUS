<?php

namespace App\Filament\Clusters\InvenLabB\Resources\InventarisNonPCLaboratoriumBResource\Pages;

use App\Filament\Clusters\InvenLabB\Resources\InventarisNonPCLaboratoriumBResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumB extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumBResource::class;

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
