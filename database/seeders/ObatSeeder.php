<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Obat::create(['nama_obat' => 'Paracetamol', 'kemasan' => 'Tablet 500mg', 'harga' => 5000]);
        Obat::create(['nama_obat' => 'Amoxicillin', 'kemasan' => 'Kapsul 250mg', 'harga' => 7000]);
    }
}
