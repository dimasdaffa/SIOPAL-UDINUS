<?php

namespace App\Filament\Clusters\InvenLabJ\Resources\InventarisPCLaboratoriumJResource\Pages;

use App\Filament\Clusters\InvenLabJ\Resources\InventarisPCLaboratoriumJResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumJ extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumJResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
