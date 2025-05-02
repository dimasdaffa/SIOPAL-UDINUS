<?php

namespace App\Filament\Clusters\InvenLabK\Resources\InventarisPCLaboratoriumKResource\Pages;

use App\Filament\Clusters\InvenLabK\Resources\InventarisPCLaboratoriumKResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCLaboratoriumK extends EditRecord
{
    protected static string $resource = InventarisPCLaboratoriumKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
