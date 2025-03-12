<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class InvenLabK extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-building-office';

    protected static ?string $navigationLabel = 'Ruang Lab K';

    protected static ?int $navigationSort = 21;

    // If you want to customize the cluster URL path
    protected static ?string $slug = 'inventaris-laboratorium-k';

    // To explain in the navigation what this cluster is for
    protected static ?string $navigationGroup = 'INVENTARIS';
}
