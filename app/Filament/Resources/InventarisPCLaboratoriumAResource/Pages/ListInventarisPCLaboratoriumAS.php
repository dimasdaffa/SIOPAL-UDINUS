<?php

namespace App\Filament\Resources\InventarisPCLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisPCLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCLaboratoriumAS extends ListRecords
{
    protected static string $resource = InventarisPCLaboratoriumAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
