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
use App\Models\User;
use App\Models\VGA;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $tahunSekarang = date('Y');

        // Seeder Headphones
        Headphone::insert([
            [
                'no_inventaris' => 'LABKOM/HP/001/' . $tahunSekarang,
                'merk' => 'Sony',
                'nama' => 'WH-1000XM4',
                'spesifikasi' => 'Noise Cancelling, Bluetooth, Hi-Res Audio',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/002/' . ($tahunSekarang - 1),
                'merk' => 'Bose',
                'nama' => 'QuietComfort 45',
                'spesifikasi' => 'ANC, Long Battery Life, Bluetooth 5.1',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/003/' . $tahunSekarang,
                'merk' => 'Sennheiser',
                'nama' => 'Momentum 3 Wireless',
                'spesifikasi' => 'Noise Cancelling, Bluetooth 5.0, 17-hour battery',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/004/' . ($tahunSekarang - 1),
                'merk' => 'JBL',
                'nama' => 'Live 650BTNC',
                'spesifikasi' => 'Wireless, Noise Cancelling, 30-hour battery',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/005/' . $tahunSekarang,
                'merk' => 'Apple',
                'nama' => 'AirPods Max',
                'spesifikasi' => 'Active Noise Cancellation, Spatial Audio, 20-hour battery',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/006/' . ($tahunSekarang - 1),
                'merk' => 'Jabra',
                'nama' => 'Elite 85h',
                'spesifikasi' => 'SmartSound, Noise Cancelling, 36-hour battery',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/007/' . $tahunSekarang,
                'merk' => 'Audio-Technica',
                'nama' => 'ATH-M50xBT',
                'spesifikasi' => 'Wireless, Hi-Res Audio, 40-hour battery',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/008/' . ($tahunSekarang - 1),
                'merk' => 'Beats',
                'nama' => 'Solo Pro',
                'spesifikasi' => 'Noise Cancelling, Bluetooth, 22-hour battery',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/009/' . $tahunSekarang,
                'merk' => 'Microsoft',
                'nama' => 'Surface Headphones 2',
                'spesifikasi' => 'Noise Cancelling, Bluetooth, 20-hour battery',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/HP/010/' . ($tahunSekarang - 1),
                'merk' => 'Sony',
                'nama' => 'WH-CH710N',
                'spesifikasi' => 'Noise Cancelling, Bluetooth, 35-hour battery',
                'tahun' => $tahunSekarang - 1,
            ],
        ]);

        Processor::insert([
            [
                'no_inventaris' => 'LABKOM/PR/001/' . $tahunSekarang,
                'merk' => 'Intel',
                'tipe' => 'Core i7-12700K',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/002/' . ($tahunSekarang - 1),
                'merk' => 'AMD',
                'tipe' => 'Ryzen 7 5800X',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/003/' . ($tahunSekarang - 2),
                'merk' => 'Intel',
                'tipe' => 'Core i5-12600K',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/004/' . $tahunSekarang,
                'merk' => 'AMD',
                'tipe' => 'Ryzen 9 5900X',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/005/' . ($tahunSekarang - 1),
                'merk' => 'Intel',
                'tipe' => 'Core i9-12900K',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/006/' . ($tahunSekarang - 2),
                'merk' => 'AMD',
                'tipe' => 'Ryzen 5 5600X',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/007/' . $tahunSekarang,
                'merk' => 'Intel',
                'tipe' => 'Core i3-12100',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/008/' . ($tahunSekarang - 1),
                'merk' => 'AMD',
                'tipe' => 'Ryzen 3 5300G',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/009/' . ($tahunSekarang - 2),
                'merk' => 'Intel',
                'tipe' => 'Core i7-11700K',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/PR/010/' . $tahunSekarang,
                'merk' => 'AMD',
                'tipe' => 'Ryzen 7 5700G',
                'tahun' => $tahunSekarang,
            ],
        ]);

        VGA::insert([
            [
                'no_inventaris' => 'LABKOM/VGA/001/' . $tahunSekarang,
                'merk' => 'NVIDIA',
                'tipe' => 'RTX 3080',
                'kapasitas' => 12,
                'spesifikasi' => 'GDDR6X, 320-bit, 8704 CUDA Cores',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/002/' . ($tahunSekarang - 1),
                'merk' => 'AMD',
                'tipe' => 'RX 6800 XT',
                'kapasitas' => 16,
                'spesifikasi' => 'GDDR6, 256-bit, 4608 Stream Processors',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/003/' . ($tahunSekarang - 2),
                'merk' => 'Intel',
                'tipe' => 'Arc A770',
                'kapasitas' => 16,
                'spesifikasi' => 'GDDR6, 256-bit, Xe HPG Architecture',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/004/' . $tahunSekarang,
                'merk' => 'NVIDIA',
                'tipe' => 'RTX 3090',
                'kapasitas' => 24,
                'spesifikasi' => 'GDDR6X, 384-bit, 10496 CUDA Cores',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/005/' . ($tahunSekarang - 1),
                'merk' => 'AMD',
                'tipe' => 'RX 6900 XT',
                'kapasitas' => 16,
                'spesifikasi' => 'GDDR6, 256-bit, 5120 Stream Processors',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/006/' . ($tahunSekarang - 2),
                'merk' => 'NVIDIA',
                'tipe' => 'RTX 3070',
                'kapasitas' => 8,
                'spesifikasi' => 'GDDR6, 256-bit, 5888 CUDA Cores',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/007/' . $tahunSekarang,
                'merk' => 'AMD',
                'tipe' => 'RX 6700 XT',
                'kapasitas' => 12,
                'spesifikasi' => 'GDDR6, 192-bit, 2560 Stream Processors',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/008/' . ($tahunSekarang - 1),
                'merk' => 'NVIDIA',
                'tipe' => 'RTX 3060 Ti',
                'kapasitas' => 8,
                'spesifikasi' => 'GDDR6, 256-bit, 4864 CUDA Cores',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/009/' . ($tahunSekarang - 2),
                'merk' => 'AMD',
                'tipe' => 'RX 6600 XT',
                'kapasitas' => 8,
                'spesifikasi' => 'GDDR6, 128-bit, 2048 Stream Processors',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/VGA/010/' . $tahunSekarang,
                'merk' => 'NVIDIA',
                'tipe' => 'RTX 3050',
                'kapasitas' => 8,
                'spesifikasi' => 'GDDR6, 128-bit, 2560 CUDA Cores',
                'tahun' => $tahunSekarang,
            ],
        ]);

        RAM::insert([
            [
                'no_inventaris' => 'LABKOM/RAM/001/' . $tahunSekarang,
                'merk' => 'Corsair',
                'tipe' => 'DDR4',
                'kapasitas' => 16,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/002/' . ($tahunSekarang - 1),
                'merk' => 'Kingston',
                'tipe' => 'DDR5',
                'kapasitas' => 32,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/003/' . ($tahunSekarang - 2),
                'merk' => 'G.Skill',
                'tipe' => 'DDR3',
                'kapasitas' => 8,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/004/' . $tahunSekarang,
                'merk' => 'Samsung',
                'tipe' => 'DDR4',
                'kapasitas' => 32,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/005/' . ($tahunSekarang - 1),
                'merk' => 'Crucial',
                'tipe' => 'DDR4',
                'kapasitas' => 16,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/006/' . ($tahunSekarang - 2),
                'merk' => 'Team Group',
                'tipe' => 'DDR5',
                'kapasitas' => 64,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/007/' . $tahunSekarang,
                'merk' => 'HyperX',
                'tipe' => 'DDR4',
                'kapasitas' => 8,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/008/' . ($tahunSekarang - 1),
                'merk' => 'ADATA',
                'tipe' => 'DDR3',
                'kapasitas' => 16,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/009/' . ($tahunSekarang - 2),
                'merk' => 'Patriot',
                'tipe' => 'DDR4',
                'kapasitas' => 32,
            ],
            [
                'no_inventaris' => 'LABKOM/RAM/010/' . $tahunSekarang,
                'merk' => 'Micron',
                'tipe' => 'DDR5',
                'kapasitas' => 64,
            ],
        ]);

        // Seeder Monitors
        Monitor::insert([
            [
                'no_inventaris' => 'LABKOM/MN/001/' . $tahunSekarang,
                'merk' => 'LG',
                'nama' => 'UltraFine 4K',
                'resolusi' => 3840,
                'ukuran' => '27',
                'spesifikasi' => 'HDR, USB-C, IPS Display',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/002/' . ($tahunSekarang - 1),
                'merk' => 'Dell',
                'nama' => 'P2723QE',
                'resolusi' => 3840,
                'ukuran' => '27',
                'spesifikasi' => '4K, USB-C Hub, Anti-Glare',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/003/' . ($tahunSekarang - 2),
                'merk' => 'Samsung',
                'nama' => 'Odyssey G7',
                'resolusi' => 2560,
                'ukuran' => '32',
                'spesifikasi' => 'QHD, 240Hz, Curved',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/004/' . $tahunSekarang,
                'merk' => 'ASUS',
                'nama' => 'ProArt PA278CV',
                'resolusi' => 2560,
                'ukuran' => '27',
                'spesifikasi' => 'QHD, Factory Calibrated, IPS',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/005/' . ($tahunSekarang - 1),
                'merk' => 'Acer',
                'nama' => 'Predator XB273U',
                'resolusi' => 2560,
                'ukuran' => '27',
                'spesifikasi' => 'QHD, 240Hz, G-Sync',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/006/' . ($tahunSekarang - 2),
                'merk' => 'HP',
                'nama' => 'Z27k G3',
                'resolusi' => 3840,
                'ukuran' => '27',
                'spesifikasi' => '4K, USB-C, HDR10',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/007/' . $tahunSekarang,
                'merk' => 'BenQ',
                'nama' => 'PD3220U',
                'resolusi' => 3840,
                'ukuran' => '32',
                'spesifikasi' => '4K, HDR10, Factory Calibrated',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/008/' . ($tahunSekarang - 1),
                'merk' => 'MSI',
                'nama' => 'Optix MAG274QRF',
                'resolusi' => 2560,
                'ukuran' => '27',
                'spesifikasi' => 'QHD, 165Hz, IPS',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/009/' . ($tahunSekarang - 2),
                'merk' => 'ViewSonic',
                'nama' => 'VP2768a',
                'resolusi' => 2560,
                'ukuran' => '27',
                'spesifikasi' => 'QHD, IPS, Factory Calibrated',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MN/010/' . $tahunSekarang,
                'merk' => 'Philips',
                'nama' => '276E8VJSB',
                'resolusi' => 3840,
                'ukuran' => '27',
                'spesifikasi' => '4K, IPS, UltraClear',
                'tahun' => $tahunSekarang,
            ],
        ]);


        // Seeder Keyboards
        Keyboard::insert([
            [
                'no_inventaris' => 'LABKOM/KY/001/' . $tahunSekarang,
                'merk' => 'Logitech',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/002/' . ($tahunSekarang - 1),
                'merk' => 'Razer',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/003/' . ($tahunSekarang - 2),
                'merk' => 'Corsair',
                'tipe' => 'Mechanical',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/004/' . $tahunSekarang,
                'merk' => 'Microsoft',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/005/' . ($tahunSekarang - 1),
                'merk' => 'Apple',
                'tipe' => 'Bluetooth',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/006/' . ($tahunSekarang - 2),
                'merk' => 'Ducky',
                'tipe' => 'Mechanical',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/007/' . $tahunSekarang,
                'merk' => 'HP',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/008/' . ($tahunSekarang - 1),
                'merk' => 'Keychron',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/009/' . ($tahunSekarang - 2),
                'merk' => 'SteelSeries',
                'tipe' => 'Mechanical',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/KY/010/' . $tahunSekarang,
                'merk' => 'Asus',
                'tipe' => 'RGB Mechanical',
                'tahun' => $tahunSekarang,
            ],
        ]);

        // Seeder Penyimpanan
        Penyimpanan::insert([
            [
                'no_inventaris' => 'LABKOM/PM/001/SSD',
                'merk' => 'Samsung',
                'tipe' => 'SSD',
                'kapasitas' => 1000,
                'spesifikasi' => 'NVMe, Gen4, 7000MB/s',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/002/HDD',
                'merk' => 'Seagate',
                'tipe' => 'HDD',
                'kapasitas' => 2000,
                'spesifikasi' => 'SATA 7200RPM, 256MB Cache',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/003/SSD',
                'merk' => 'Western Digital',
                'tipe' => 'SSD',
                'kapasitas' => 500,
                'spesifikasi' => 'NVMe, Gen3, 3500MB/s',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/004/HDD',
                'merk' => 'Toshiba',
                'tipe' => 'HDD',
                'kapasitas' => 4000,
                'spesifikasi' => 'SATA 7200RPM, 128MB Cache',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/005/SSD',
                'merk' => 'Crucial',
                'tipe' => 'SSD',
                'kapasitas' => 2000,
                'spesifikasi' => 'NVMe, Gen4, 5000MB/s',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/006/HDD',
                'merk' => 'Western Digital',
                'tipe' => 'HDD',
                'kapasitas' => 1000,
                'spesifikasi' => 'SATA 5400RPM, 64MB Cache',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/007/SSD',
                'merk' => 'Kingston',
                'tipe' => 'SSD',
                'kapasitas' => 500,
                'spesifikasi' => 'SATA III, 550MB/s',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/008/HDD',
                'merk' => 'Seagate',
                'tipe' => 'HDD',
                'kapasitas' => 6000,
                'spesifikasi' => 'SATA 7200RPM, 256MB Cache',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/009/SSD',
                'merk' => 'SanDisk',
                'tipe' => 'SSD',
                'kapasitas' => 1000,
                'spesifikasi' => 'NVMe, Gen3, 3400MB/s',
            ],
            [
                'no_inventaris' => 'LABKOM/PM/010/HDD',
                'merk' => 'Hitachi',
                'tipe' => 'HDD',
                'kapasitas' => 3000,
                'spesifikasi' => 'SATA 7200RPM, 128MB Cache',
            ],
        ]);

        // Seeder Motherboards
        Motherboard::insert([
            [
                'no_inventaris' => 'LABKOM/MB/001/' . $tahunSekarang,
                'merk' => 'ASUS',
                'tipe' => 'ROG STRIX B550-F',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/002/' . ($tahunSekarang - 1),
                'merk' => 'MSI',
                'tipe' => 'MAG B550 TOMAHAWK',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/003/' . ($tahunSekarang - 2),
                'merk' => 'Gigabyte',
                'tipe' => 'B550 AORUS PRO',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/004/' . $tahunSekarang,
                'merk' => 'ASRock',
                'tipe' => 'B550 Steel Legend',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/005/' . ($tahunSekarang - 1),
                'merk' => 'ASUS',
                'tipe' => 'TUF GAMING X570-PLUS',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/006/' . ($tahunSekarang - 2),
                'merk' => 'MSI',
                'tipe' => 'MPG X570 GAMING EDGE WIFI',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/007/' . $tahunSekarang,
                'merk' => 'Gigabyte',
                'tipe' => 'X570 AORUS ELITE',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/008/' . ($tahunSekarang - 1),
                'merk' => 'ASRock',
                'tipe' => 'X570 Taichi',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/009/' . ($tahunSekarang - 2),
                'merk' => 'ASUS',
                'tipe' => 'PRIME B450-PLUS',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MB/010/' . $tahunSekarang,
                'merk' => 'MSI',
                'tipe' => 'B450 TOMAHAWK MAX',
                'tahun' => $tahunSekarang,
            ],
        ]);

        DVD::insert([
            [
                'no_inventaris' => 'LABKOM/DVD/001/' . $tahunSekarang,
                'dvd' => 'DVD RW',
                'merk' => 'LG',
                'spesifikasi' => 'Kecepatan 24x, Mendukung DVD-R, DVD+R, RW',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/002/' . ($tahunSekarang - 1),
                'dvd' => 'DVD ROM',
                'merk' => 'Asus',
                'spesifikasi' => 'Kecepatan 16x, hanya membaca DVD',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/003/' . ($tahunSekarang - 2),
                'dvd' => 'Blu-ray RW',
                'merk' => 'Pioneer',
                'spesifikasi' => 'Dukungan BD-R, BD-RE, DVD-R, DVD+R',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/004/' . $tahunSekarang,
                'dvd' => 'DVD RW',
                'merk' => 'Samsung',
                'spesifikasi' => 'Kecepatan 22x, Mendukung DVD-R, DVD+R, RW',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/005/' . ($tahunSekarang - 1),
                'dvd' => 'Blu-ray ROM',
                'merk' => 'LG',
                'spesifikasi' => 'Dukungan BD-R, BD-RE, hanya membaca',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/006/' . ($tahunSekarang - 2),
                'dvd' => 'DVD RW',
                'merk' => 'HP',
                'spesifikasi' => 'Kecepatan 24x, Mendukung DVD-R, DVD+R, RW',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/007/' . $tahunSekarang,
                'dvd' => 'Blu-ray RW',
                'merk' => 'Sony',
                'spesifikasi' => 'Dukungan BD-R, BD-RE, DVD-R, DVD+R',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/008/' . ($tahunSekarang - 1),
                'dvd' => 'DVD ROM',
                'merk' => 'Pioneer',
                'spesifikasi' => 'Kecepatan 16x, hanya membaca DVD',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/009/' . ($tahunSekarang - 2),
                'dvd' => 'DVD RW',
                'merk' => 'Asus',
                'spesifikasi' => 'Kecepatan 24x, Mendukung DVD-R, DVD+R, RW',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/DVD/010/' . $tahunSekarang,
                'dvd' => 'Blu-ray ROM',
                'merk' => 'LG',
                'spesifikasi' => 'Dukungan BD-R, BD-RE, hanya membaca',
                'tahun' => $tahunSekarang,
            ],
        ]);

        Mouse::insert([
            [
                'no_inventaris' => 'LABKOM/MOUSE/001/' . $tahunSekarang,
                'merk' => 'Logitech',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/002/' . ($tahunSekarang - 1),
                'merk' => 'Razer',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/003/' . ($tahunSekarang - 2),
                'merk' => 'Microsoft',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/004/' . $tahunSekarang,
                'merk' => 'HP',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/005/' . ($tahunSekarang - 1),
                'merk' => 'Corsair',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/006/' . ($tahunSekarang - 2),
                'merk' => 'SteelSeries',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/007/' . $tahunSekarang,
                'merk' => 'Asus',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/008/' . ($tahunSekarang - 1),
                'merk' => 'Dell',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang - 1,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/009/' . ($tahunSekarang - 2),
                'merk' => 'Lenovo',
                'tipe' => 'USB',
                'tahun' => $tahunSekarang - 2,
            ],
            [
                'no_inventaris' => 'LABKOM/MOUSE/010/' . $tahunSekarang,
                'merk' => 'Apple',
                'tipe' => 'Wireless',
                'tahun' => $tahunSekarang,
            ],
        ]);

        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'no_phone' => '081234567890',
                'npp' => '1234567890',
                'position' => 'Super Admin',
                'password' => bcrypt('admin'),
            ],
        ]);
    }
}
