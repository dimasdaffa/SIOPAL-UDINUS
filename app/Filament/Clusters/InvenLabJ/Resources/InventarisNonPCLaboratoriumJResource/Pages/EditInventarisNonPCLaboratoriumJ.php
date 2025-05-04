<?php

namespace App\Filament\Clusters\InvenLabJ\Resources\InventarisNonPCLaboratoriumJResource\Pages;

use App\Filament\Clusters\InvenLabJ\Resources\InventarisNonPCLaboratoriumJResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumJ extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumJResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
