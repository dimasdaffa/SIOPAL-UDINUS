<?php

namespace App\Filament\Clusters\InvenLabC\Resources\InventarisNonPCLaboratoriumCResource\Pages;

use App\Filament\Clusters\InvenLabC\Resources\InventarisNonPCLaboratoriumCResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumC extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumCResource::class;

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
