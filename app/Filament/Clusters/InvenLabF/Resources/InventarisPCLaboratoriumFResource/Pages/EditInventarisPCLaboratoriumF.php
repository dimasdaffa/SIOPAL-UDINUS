<?php

namespace App\Filament\Clusters\InvenLabF\Resources\InventarisPCLaboratoriumFResource\Pages;

use App\Filament\Clusters\InvenLabF\Resources\InventarisPCLaboratoriumFResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumF extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumFResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
