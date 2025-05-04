<?php

namespace App\Filament\Resources\InventarisNonPCLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisNonPCLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumA extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumAResource::class;

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
