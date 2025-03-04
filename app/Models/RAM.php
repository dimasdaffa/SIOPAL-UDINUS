<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    //
    protected $fillable = [
        'no_inventaris',
        'merk',
        'tipe',
        'kapasitas',
    ];

    // Auto-generate Nomor Inventaris sebelum menyimpan
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ram) {
            $tipe = strtoupper($ram->tipe); // Pastikan huruf besar (SSD/HDD)
            $id = RAM::max('id') + 1; // Ambil ID terakhir + 1
            $ram->no_inventaris = "LABKOM/RM/" . str_pad($id, 3, '0', STR_PAD_LEFT).'/'. $ram->tipe;
        });
    }
}
