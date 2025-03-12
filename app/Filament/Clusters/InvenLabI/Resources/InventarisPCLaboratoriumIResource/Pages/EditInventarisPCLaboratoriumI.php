<?php

namespace App\Filament\Clusters\InvenLabI\Resources\InventarisPCLaboratoriumIResource\Pages;

use App\Filament\Clusters\InvenLabI\Resources\InventarisPCLaboratoriumIResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumI extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
