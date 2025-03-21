<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class InvenLabD extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-building-office';

    protected static ?string $navigationLabel = 'Ruang Lab D';

    protected static ?int $navigationSort = 14;

    // If you want to customize the cluster URL path
    protected static ?string $slug = 'inventaris-laboratorium-d';

    // To explain in the navigation what this cluster is for
    protected static ?string $navigationGroup = 'INVENTARIS';
}
