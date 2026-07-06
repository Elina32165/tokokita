<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat akun Admin (Pustakawan)
        User::create([
            'name' => 'Pustakawan Kampus',
            'email' => 'pustakawan@kampus.ac.id',
            'password' => Hash::make('pustakawan123'),
            'role' => 'admin',
        ]);

        // Membuat akun Customer (Anggota) untuk uji coba
        User::create([
            'name' => 'Anggota Perpustakaan',
            'email' => 'anggota@kampus.ac.id',
            'password' => Hash::make('anggota123'),
            'role' => 'customer',
        ]);
    }
}