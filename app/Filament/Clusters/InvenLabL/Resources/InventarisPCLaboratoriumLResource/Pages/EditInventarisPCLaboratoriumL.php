<?php

namespace App\Filament\Clusters\InvenLabL\Resources\InventarisPCLaboratoriumLResource\Pages;

use App\Filament\Clusters\InvenLabL\Resources\InventarisPCLaboratoriumLResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumL extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
