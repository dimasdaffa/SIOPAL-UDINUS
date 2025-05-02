<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class InvenLabA extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-building-office';

    protected static ?string $navigationLabel = 'Ruang Lab A';

    protected static ?int $navigationSort = 11;

    // If you want to customize the cluster URL path
    protected static ?string $slug = 'inventaris-laboratorium-a';

    // To explain in the navigation what this cluster is for
    protected static ?string $navigationGroup = 'INVENTARIS';
}
