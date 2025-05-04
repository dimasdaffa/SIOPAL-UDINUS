<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class InvenLabB extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-building-office';

    protected static ?string $navigationLabel = 'Ruang Lab B';

    protected static ?int $navigationSort = 12;

    // If you want to customize the cluster URL path
    protected static ?string $slug = 'inventaris-laboratorium-b';

    // To explain in the navigation what this cluster is for
    protected static ?string $navigationGroup = 'INVENTARIS';
}
