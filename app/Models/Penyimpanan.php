<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyimpanan extends Model
{
    protected $fillable = [
        'no_inventaris',
        'merk',
        'tipe',
        'kapasitas',
        'spesifikasi',
    ];

    // Auto-generate Nomor Inventaris sebelum menyimpan
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($penyimpanan) {
            $tipe = strtoupper($penyimpanan->tipe); // Pastikan huruf besar (SSD/HDD)
            $id = Penyimpanan::max('id') + 1; // Ambil ID terakhir + 1
            $penyimpanan->no_inventaris = "LABKOM/PM/" . str_pad($id, 3, '0', STR_PAD_LEFT) . "/$tipe";
        });
    }
}
