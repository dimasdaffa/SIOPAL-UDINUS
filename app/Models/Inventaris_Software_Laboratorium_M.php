<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris_Software_Laboratorium_M extends Model
{
    protected $fillable = [
        'versi',
        'nama',
        'keterangan',
    ];

    protected $attributes = [
        'keterangan' => '',
    ];
}
