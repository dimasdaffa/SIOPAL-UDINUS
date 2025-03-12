<?php

namespace App\Filament\Clusters\InvenLabH\Resources\InventarisNonPCLaboratoriumHResource\Pages;

use App\Filament\Clusters\InvenLabH\Resources\InventarisNonPCLaboratoriumHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumH extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumHResource::class;

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
