<?php

namespace App\Filament\Clusters\InvenLabM\Resources\InventarisSoftwareLaboratoriumMResource\Pages;

use App\Filament\Clusters\InvenLabM\Resources\InventarisSoftwareLaboratoriumMResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumM extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
