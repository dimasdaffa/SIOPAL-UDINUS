<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisNonPCLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisNonPCLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumG extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumGResource::class;

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
