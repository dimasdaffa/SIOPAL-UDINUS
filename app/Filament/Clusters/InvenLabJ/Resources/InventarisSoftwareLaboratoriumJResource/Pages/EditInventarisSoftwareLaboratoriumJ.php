<?php

namespace App\Filament\Clusters\InvenLabJ\Resources\InventarisSoftwareLaboratoriumJResource\Pages;

use App\Filament\Clusters\InvenLabJ\Resources\InventarisSoftwareLaboratoriumJResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumJ extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumJResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
