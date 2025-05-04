<?php

namespace App\Filament\Clusters\InvenLabM\Resources\InventarisNonPCLaboratoriumMResource\Pages;

use App\Filament\Clusters\InvenLabM\Resources\InventarisNonPCLaboratoriumMResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumM extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
