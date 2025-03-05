<?php

namespace App\Filament\Resources\LaboranResource\Pages;

use App\Filament\Resources\LaboranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLaboran extends CreateRecord
{
    protected static string $resource = LaboranResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
