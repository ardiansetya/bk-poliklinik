<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JanjiPeriksa;

class JanjiPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JanjiPeriksa::create([
            'id_pasien' => 1,
            'id_jadwal' => 1,
            'keluhan' => 'Sakit kepala',
            'no_antrian' => 1,
        ]);
    }
}
