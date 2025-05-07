<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Inventaris_PC_Laboratorium_I extends Model
{
    protected $guarded = ['id'];

    protected $table='inventaris__p_c__laboratorium__i_s';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($invLABI) { //PARAMETER BEBAS
            $lastId = self::max('id') + 1; // Ambil ID terakhir & tambahkan 1
            $kodeUnik = str_pad($lastId, 2, '0', STR_PAD_LEFT); // Format 01, 02, dst.
            $invLABI->no_inventaris = 'UDN/LABKOM/INV/D2I/PC' . $kodeUnik;
        });
    }

    // Eager loading with selected columns
    public function motherboard()
    {
        return $this->belongsTo(Motherboard::class, 'motherboard_id')->select('id', 'full_name');
    }

    public function processor()
    {
        return $this->belongsTo(Processor::class, 'processor_id')->select('id', 'full_name');
    }

    public function penyimpanan()
    {
        return $this->belongsTo(Penyimpanan::class, 'penyimpanan_id')->select('id', 'full_name');
    }

    public function vga()
    {
        return $this->belongsTo(VGA::class, 'vga_id')->select('id', 'full_name');
    }

    public function ram()
    {
        return $this->belongsTo(RAM::class, 'ram_id')->select('id', 'full_name');
    }

    public function dvd()
    {
        return $this->belongsTo(DVD::class, 'dvd_id')->select('id', 'merk');
    }

    public function keyboard()
    {
        return $this->belongsTo(Keyboard::class, 'keyboard_id')->select('id', 'full_name');
    }

    public function mouse()
    {
        return $this->belongsTo(Mouse::class, 'mouse_id')->select('id', 'full_name');
    }

    public function monitor()
    {
        return $this->belongsTo(Monitor::class, 'monitor_id')->select('id', 'full_name');
    }

    public function headphone()
    {
        return $this->belongsTo(Headphone::class, 'headphone_id')->select('id', 'full_name');
    }

    public function psu()
    {
        return $this->belongsTo(PSU::class, 'psu_id')->select('id', 'full_name');
    }

    // Eager load all relations
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with([
            'motherboard',
            'processor',
            'penyimpanan',
            'vga',
            'ram',
            'dvd',
            'keyboard',
            'mouse',
            'monitor',
            'headphone',
            'psu',
        ]);
    }
}
