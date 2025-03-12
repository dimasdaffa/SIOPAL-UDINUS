<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris_PC_Laboratorium_M extends Model
{
    protected $guarded = ['id'];

    protected $table='inventaris__p_c__laboratorium__m_s';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($invLABM) { //PARAMETER BEBAS
            $lastId = self::max('id') + 1; // Ambil ID terakhir & tambahkan 1
            $kodeUnik = str_pad($lastId, 2, '0', STR_PAD_LEFT); // Format 01, 02, dst.
            $invLABM->no_inventaris = 'UDN/LABKOM/INV/D3M/PC' . $kodeUnik;
        });
    }

    public function motherboard()
    {
        return $this->belongsTo(Motherboard::class, 'motherboard_id');
    }

    public function processor()
    {
        return $this->belongsTo(Processor::class, 'processor_id');
    }

    public function penyimpanan()
    {
        return $this->belongsTo(Penyimpanan::class, 'penyimpanan_id');
    }

    public function vga()
    {
        return $this->belongsTo(VGA::class, 'vga_id');
    }

    public function ram()
    {
        return $this->belongsTo(RAM::class, 'ram_id');
    }

    public function dvd()
    {
        return $this->belongsTo(DVD::class, 'dvd_id');
    }

    public function keyboard()
    {
        return $this->belongsTo(Keyboard::class, 'keyboard_id');
    }

    public function mouse()
    {
        return $this->belongsTo(Mouse::class, 'mouse_id');
    }

    public function monitor()
    {
        return $this->belongsTo(Monitor::class, 'monitor_id');
    }

    public function headphone()
    {
        return $this->belongsTo(Headphone::class, 'headphone_id');
    }
}
