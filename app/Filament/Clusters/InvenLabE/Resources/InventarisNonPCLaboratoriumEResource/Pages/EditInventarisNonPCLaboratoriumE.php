<?php

namespace App\Filament\Clusters\InvenLabE\Resources\InventarisNonPCLaboratoriumEResource\Pages;

use App\Filament\Clusters\InvenLabE\Resources\InventarisNonPCLaboratoriumEResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisNonPCLaboratoriumE extends EditRecord
{
    protected static string $resource = InventarisNonPCLaboratoriumEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
