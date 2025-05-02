<?php

namespace App\Filament\Clusters\InvenLabN\Resources\InventarisPCLaboratoriumNResource\Pages;

use App\Filament\Clusters\InvenLabN\Resources\InventarisPCLaboratoriumNResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumN extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumNResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
