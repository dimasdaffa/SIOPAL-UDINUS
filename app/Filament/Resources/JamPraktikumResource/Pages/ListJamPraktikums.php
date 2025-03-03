<?php

namespace App\Filament\Resources\JamPraktikumResource\Pages;

use App\Filament\Resources\JamPraktikumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJamPraktikums extends ListRecords
{
    protected static string $resource = JamPraktikumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
