<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User role: dokter
        User::create([
            'nama' => 'Dr. Andi',
            'alamat' => 'Jl. Sehat No.1',
            'no_ktp' => '1111111111111111',
            'no_hp' => '081234567890',
            'no_rm' => 'RM001',
            'poli' => 'Umum',
            'email' => 'dokter@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        // User role: pasien
        User::create([
            'nama' => 'Budi Pasien',
            'alamat' => 'Jl. Sakit No.2',
            'no_ktp' => '2222222222222222',
            'no_hp' => '089876543210',
            'no_rm' => 'RM002',
            'poli' => 'Gigi',
            'email' => 'pasien@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);
    }
}
