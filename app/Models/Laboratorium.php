<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $guarded = ['id'];

    protected $table='laboratoria';

    protected $fillable = [
        'kategori_id',
        'ruang',
        'kapasitas',

    ];

    public function kategori()
    {
        return $this->belongsTo(KlasifikasiLab::class, 'kategori_id');
    }
}
