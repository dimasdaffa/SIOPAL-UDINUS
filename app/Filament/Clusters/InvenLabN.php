<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class InvenLabN extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-building-office';

    protected static ?string $navigationLabel = 'Ruang Lab N';

    protected static ?int $navigationSort = 23;

    // If you want to customize the cluster URL path
    protected static ?string $slug = 'inventaris-laboratorium-n';

    // To explain in the navigation what this cluster is for
    protected static ?string $navigationGroup = 'INVENTARIS';
}
