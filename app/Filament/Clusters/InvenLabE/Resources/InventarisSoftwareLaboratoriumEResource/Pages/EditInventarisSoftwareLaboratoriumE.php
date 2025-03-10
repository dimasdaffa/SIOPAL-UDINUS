<?php

namespace App\Filament\Clusters\InvenLabE\Resources\InventarisSoftwareLaboratoriumEResource\Pages;

use App\Filament\Clusters\InvenLabE\Resources\InventarisSoftwareLaboratoriumEResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumE extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumEResource::class;

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
