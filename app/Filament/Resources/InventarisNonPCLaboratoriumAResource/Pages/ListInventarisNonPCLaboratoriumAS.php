<?php

namespace App\Filament\Resources\InventarisNonPCLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisNonPCLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisNonPCLaboratoriumAS extends ListRecords
{
    protected static string $resource = InventarisNonPCLaboratoriumAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
