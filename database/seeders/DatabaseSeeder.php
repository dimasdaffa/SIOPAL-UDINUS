<?php

namespace Database\Seeders;

use App\Models\DVD;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Headphone;
use App\Models\Monitor;
use App\Models\Keyboard;
use App\Models\Penyimpanan;
use App\Models\Motherboard;
use App\Models\Mouse;
use App\Models\Processor;
use App\Models\RAM;
use App\Models\VGA;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus semua data sebelum seeding untuk menghindari duplikasi
        DB::table('headphones')->truncate();
        DB::table('monitors')->truncate();
        DB::table('keyboards')->truncate();
        DB::table('penyimpanans')->truncate();
        DB::table('motherboards')->truncate();

        $tahunSekarang = date('Y');

        // Seeder Headphones
        Headphone::insert([
            [
                'no_inventaris' => 'LABKOM/HP001/' . $tahunSekarang,
                'merk' => 'Sony',
                'nama' => 'Sony WH-1000XM4',
                'spesifikasi' => 'Noise Cancelling, Bluetooth, Hi-Res Audio',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/HP002/' . ($tahunSekarang - 1),
                'merk' => 'Bose',
                'nama' => 'Bose QuietComfort 45',
                'spesifikasi' => 'ANC, Long Battery Life, Bluetooth 5.1',
                'tahun' => $tahunSekarang - 1,
            ],
        ]);

        Processor::insert([
            [
                'no_inventaris' => 'LABKOM/PR001/' . $tahunSekarang,
                'merk' => 'Intel',
                'tipe' => 'Core i7-12700K',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/PR002/' . ($tahunSekarang - 1),
                'merk' => 'AMD',
                'tipe' => 'Ryzen 7 5800X',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/PR003/' . ($tahunSekarang - 2),
                'merk' => 'Intel',
                'tipe' => 'Core i5-12600K',
                'tahun' => $tahunSekarang - 2,
            ],
        ]);

        VGA::insert([
            [
                'no_inventaris' => 'LABKOM/VGA001/' . $tahunSekarang,
                'merk' => 'NVIDIA',
                'tipe' => 'RTX 3080',
                'kapasitas' => 10,
                'spesifikasi' => 'GDDR6X, 320-bit, 8704 CUDA Cores',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA002/' . ($tahunSekarang - 1),
                'merk' => 'AMD',
                'tipe' => 'RX 6800 XT',
                'kapasitas' => 16,
                'spesifikasi' => 'GDDR6, 256-bit, 4608 Stream Processors',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA003/' . ($tahunSekarang - 2),
                'merk' => 'Intel',
                'tipe' => 'Arc A770',
                'kapasitas' => 16,
                'spesifikasi' => 'GDDR6, 256-bit, Xe HPG Architecture',
                'tahun' => $tahunSekarang - 2,
            ],
        ]);

        RAM::insert([
            [
                'no_inventaris' => 'LABKOM/RAM001/' . $tahunSekarang,
                'merk' => 'Corsair',
                'tipe' => 'DDR4',
                'kapasitas' => 16,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM002/' . ($tahunSekarang - 1),
                'merk' => 'Kingston',
                'tipe' => 'DDR5',
                'kapasitas' => 32,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM003/' . ($tahunSekarang - 2),
                'merk' => 'G.Skill',
                'tipe' => 'DDR3',
                'kapasitas' => 8,
            ],
        ]);

        // Seeder Monitors
        Monitor::insert([
            [
                'no_inventaris' => 'LABKOM/MN001/' . $tahunSekarang,
                'merk' => 'LG',
                'nama' => 'LG UltraFine 4K',
                'resolusi' => 3840,
                'ukuran' => '27 inch',
                'spesifikasi' => 'HDR, USB-C, IPS Display',
                'tahun' => $tahunSekarang, // Tambahkan tahun di sini
            ],
            [
                'no_inventaris' => 'LABKOM/MN002/' . ($tahunSekarang - 1),
                'merk' => 'Dell',
                'nama' => 'Dell P2723QE',
                'resolusi' => 3840,
                'ukuran' => '27 inch',
                'spesifikasi' => '4K, USB-C Hub, Anti-Glare',
                'tahun' => $tahunSekarang - 1, // Tambahkan tahun di sini
            ],
        ]);


        // Seeder Keyboards
        Keyboard::insert([
            [
                'no_inventaris' => 'LABKOM/KY001/' . $tahunSekarang,
                'merk' => 'Logitech',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/KY002/' . ($tahunSekarang - 1),
                'merk' => 'Razer',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang - 1,
            ],
        ]);

        // Seeder Penyimpanan
        Penyimpanan::insert([
            [
                'no_inventaris' => 'LABKOM/PM001/SSD',
                'merk' => 'Samsung',
                'tipe' => 'SSD',
                'kapasitas' => 1000,
                'spesifikasi' => 'NVMe, Gen4, 7000MB/s',
            ],
            [
                'no_inventaris' => 'LABKOM/PM002/HDD',
                'merk' => 'Seagate',
                'tipe' => 'HDD',
                'kapasitas' => 2000,
                'spesifikasi' => 'SATA 7200RPM, 256MB Cache',
            ],
        ]);

        // Seeder Motherboards
        Motherboard::insert([
            [
                'no_inventaris' => 'LABKOM/MB001/' . $tahunSekarang,
                'merk' => 'ASUS',
                'tipe' => 'ROG STRIX B550-F',
                'tahun' => $tahunSekarang,
            ],
        ]);

        DVD::insert([
            [
                'no_inventaris' => 'LABKOM/DVD001/' . $tahunSekarang,
                'dvd' => 'DVD RW',
                'merk' => 'LG',
                'spesifikasi' => 'Kecepatan 24x, Mendukung DVD-R, DVD+R, RW',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD002/' . ($tahunSekarang - 1),
                'dvd' => 'DVD ROM',
                'merk' => 'Asus',
                'spesifikasi' => 'Kecepatan 16x, hanya membaca DVD',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD003/' . ($tahunSekarang - 2),
                'dvd' => 'Blu-ray RW',
                'merk' => 'Pioneer',
                'spesifikasi' => 'Dukungan BD-R, BD-RE, DVD-R, DVD+R',
                'tahun' => $tahunSekarang - 2,
            ],
        ]);

        Mouse::insert([
            [
                'no_inventaris' => 'LABKOM/MOUSE001/' . $tahunSekarang,
                'merk' => 'Logitech',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE002/' . ($tahunSekarang - 1),
                'merk' => 'Razer',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE003/' . ($tahunSekarang - 2),
                'merk' => 'Microsoft',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang - 2,
            ],
        ]);
    }
}
