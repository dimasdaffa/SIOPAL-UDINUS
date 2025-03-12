<?php

namespace App\Filament\Clusters\InvenLabN\Resources\InventarisNonPCLaboratoriumNResource\Pages;

use App\Filament\Clusters\InvenLabN\Resources\InventarisNonPCLaboratoriumNResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumN extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumNResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
