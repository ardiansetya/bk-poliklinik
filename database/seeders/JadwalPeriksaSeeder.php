<?php

namespace Database\Seeders;

use App\Models\JadwalPeriksa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Symfony\Component\Clock\now;

class JadwalPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalPeriksa::create([
            'id_dokter' => 1,
            'hari' => 'Senin',
            'jam_mulai' => Carbon::now()->setTime(8, 0, 0),
            'jam_selesai' => Carbon::now()->setTime(10, 0, 0),
        ]);
    }
}
