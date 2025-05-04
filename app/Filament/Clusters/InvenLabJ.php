<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class InvenLabJ extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-building-office';

    protected static ?string $navigationLabel = 'Ruang Lab J';

    protected static ?int $navigationSort = 20;

    // If you want to customize the cluster URL path
    protected static ?string $slug = 'inventaris-laboratorium-j';

    // To explain in the navigation what this cluster is for
    protected static ?string $navigationGroup = 'INVENTARIS';
}
