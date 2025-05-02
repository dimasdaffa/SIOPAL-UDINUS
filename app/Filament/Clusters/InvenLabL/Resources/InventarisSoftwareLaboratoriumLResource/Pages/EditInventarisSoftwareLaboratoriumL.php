<?php

namespace App\Filament\Clusters\InvenLabL\Resources\InventarisSoftwareLaboratoriumLResource\Pages;

use App\Filament\Clusters\InvenLabL\Resources\InventarisSoftwareLaboratoriumLResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumL extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
