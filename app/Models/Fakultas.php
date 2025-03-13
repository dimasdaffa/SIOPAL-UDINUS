<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    // protected $table = 'fakultas'; opsional karena laravel udah tau nama tabel tsb
    protected $fillable = [
        'kode_fakultas',
        'nama_fakultas',
    ];
}
