<?php

namespace App\Filament\Clusters\InvenLabI\Resources\InventarisNonPCLaboratoriumIResource\Pages;

use App\Filament\Clusters\InvenLabI\Resources\InventarisNonPCLaboratoriumIResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumI extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
