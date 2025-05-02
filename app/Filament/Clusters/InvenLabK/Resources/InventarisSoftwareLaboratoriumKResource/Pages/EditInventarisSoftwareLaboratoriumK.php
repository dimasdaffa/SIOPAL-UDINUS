<?php

namespace App\Filament\Clusters\InvenLabK\Resources\InventarisSoftwareLaboratoriumKResource\Pages;

use App\Filament\Clusters\InvenLabK\Resources\InventarisSoftwareLaboratoriumKResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisSoftwareLaboratoriumK extends EditRecord
{
    protected static string $resource = InventarisSoftwareLaboratoriumKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
