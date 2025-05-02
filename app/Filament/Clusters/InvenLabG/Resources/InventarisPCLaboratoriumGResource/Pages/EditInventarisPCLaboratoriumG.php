<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisPCLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisPCLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumG extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumGResource::class;

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
