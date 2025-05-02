<?php

namespace App\Filament\Clusters\InvenLabF\Resources\InventarisNonPCLaboratoriumFResource\Pages;

use App\Filament\Clusters\InvenLabF\Resources\InventarisNonPCLaboratoriumFResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumF extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumFResource::class;

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
