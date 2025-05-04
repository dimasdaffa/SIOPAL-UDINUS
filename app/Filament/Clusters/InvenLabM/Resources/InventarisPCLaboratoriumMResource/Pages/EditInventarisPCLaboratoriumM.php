<?php

namespace App\Filament\Clusters\InvenLabM\Resources\InventarisPCLaboratoriumMResource\Pages;

use App\Filament\Clusters\InvenLabM\Resources\InventarisPCLaboratoriumMResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumM extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
