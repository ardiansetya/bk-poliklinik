<?php

namespace Database\Seeders;

use App\Models\Periksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa::create([
            'id_janji_periksa' => 1,
            'tgl_periksa' => now(),
            'catatan' => 'Tekanan darah normal',
            'biaya_periksa' => 50000,
        ]);
    }
}
