<?php

namespace App\Filament\Resources\LaboranResource\Pages;

use App\Filament\Resources\LaboranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaboran extends EditRecord
{
    protected static string $resource = LaboranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
