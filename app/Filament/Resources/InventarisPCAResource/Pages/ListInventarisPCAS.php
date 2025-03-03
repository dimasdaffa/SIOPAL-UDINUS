<?php

namespace App\Filament\Resources\InventarisPCAResource\Pages;

use App\Filament\Resources\InventarisPCAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventarisPCAS extends ListRecords
{
    protected static string $resource = InventarisPCAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
