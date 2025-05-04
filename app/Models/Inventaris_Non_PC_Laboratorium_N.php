<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris_Non_PC_Laboratorium_N extends Model
{
    protected $fillable = [
        'jumlah',
        'nama',
        'kondisi',
        'keterangan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($nonpc) {
            $lastId = self::max('id') + 1; // Ambil ID terakhir & tambahkan 1
            $kodeUnik = str_pad($lastId, 2, '0', STR_PAD_LEFT); // Format 001, 002, dst.
            $nonpc->no_inventaris = 'UDN/LABKOM/INV/NON-PC/D3N/' . $kodeUnik ;
        });
    }
}
