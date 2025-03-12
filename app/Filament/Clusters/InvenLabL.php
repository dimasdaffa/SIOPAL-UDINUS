<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class InvenLabL extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-building-office';

    protected static ?string $navigationLabel = 'Ruang Lab L';

    protected static ?int $navigationSort = 22;

    // If you want to customize the cluster URL path
    protected static ?string $slug = 'inventaris-laboratorium-l';

    // To explain in the navigation what this cluster is for
    protected static ?string $navigationGroup = 'INVENTARIS';
}
