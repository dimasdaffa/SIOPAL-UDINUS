<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nonpc extends Model
{
    protected $fillable = [
        'jumlah',
        'nama',
        'kondisi',
        'keterangan',
    ];
}
