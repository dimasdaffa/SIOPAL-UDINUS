<?php

namespace App\Filament\Clusters\InvenLabI\Resources\InventarisSoftwareLaboratoriumIResource\Pages;

use App\Filament\Clusters\InvenLabI\Resources\InventarisSoftwareLaboratoriumIResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumI extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
