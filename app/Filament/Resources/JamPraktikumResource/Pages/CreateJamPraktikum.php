<?php

namespace App\Filament\Resources\JamPraktikumResource\Pages;

use App\Filament\Resources\JamPraktikumResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJamPraktikum extends CreateRecord
{
    protected static string $resource = JamPraktikumResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
