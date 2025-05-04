<?php

namespace App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource\Pages;

use App\Filament\Clusters\InvenLabG\Resources\InventarisSoftwareLaboratoriumGResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumG extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumGResource::class;

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
