<?php

namespace App\Filament\Clusters\InvenLabH\Resources\InventarisSoftwareLaboratoriumHResource\Pages;

use App\Filament\Clusters\InvenLabH\Resources\InventarisSoftwareLaboratoriumHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumH extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
