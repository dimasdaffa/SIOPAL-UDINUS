<?php

namespace App\Filament\Resources\InventarisPCAResource\Pages;

use App\Filament\Resources\InventarisPCAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventarisPCA extends EditRecord
{
    protected static string $resource = InventarisPCAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
