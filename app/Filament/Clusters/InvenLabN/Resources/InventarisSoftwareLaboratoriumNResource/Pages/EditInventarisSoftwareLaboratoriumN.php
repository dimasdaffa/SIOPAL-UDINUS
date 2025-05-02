<?php

namespace App\Filament\Clusters\InvenLabN\Resources\InventarisSoftwareLaboratoriumNResource\Pages;

use App\Filament\Clusters\InvenLabN\Resources\InventarisSoftwareLaboratoriumNResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumN extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumNResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
