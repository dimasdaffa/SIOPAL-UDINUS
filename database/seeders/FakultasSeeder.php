<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FakultasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Gunakan Faker dengan lokal Indonesia

        for ($i = 1; $i <= 7; $i++) { // Buat 7 data dummy fakultas
            DB::table('fakultas')->insert([
                'kode_fakultas' => strtoupper($faker->unique()->lexify('???')), // Kode 3 huruf random (misal: FTI, FEB)
                'nama_fakultas' => 'Fakultas ' . $faker->word(), // Nama fakultas dengan kata acak
            ]);
        }
    }
}


