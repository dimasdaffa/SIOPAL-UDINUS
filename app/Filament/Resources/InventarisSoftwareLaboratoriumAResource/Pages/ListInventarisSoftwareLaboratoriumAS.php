<?php

namespace App\Filament\Resources\InventarisSoftwareLaboratoriumAResource\Pages;

use App\Filament\Resources\InventarisSoftwareLaboratoriumAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisSoftwareLaboratoriumAS extends ListRecords
{
    protected static string $resource = InventarisSoftwareLaboratoriumAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
