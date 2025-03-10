<?php

namespace App\Filament\Clusters\InvenLabE\Resources\InventarisPCLaboratoriumEResource\Pages;

use App\Filament\Clusters\InvenLabE\Resources\InventarisPCLaboratoriumEResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumE extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumEResource::class;

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
