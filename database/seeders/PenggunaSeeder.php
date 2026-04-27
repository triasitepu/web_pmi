<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        Pengguna::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'nama_pengguna' => 'Admin',
                'kata_sandi' => Hash::make('password123'),
                'peran' => 'admin',
                'status' => 'Aktif', // pastikan huruf besar
            ]
        );

        Pengguna::updateOrCreate(
            ['email' => 'superadmin@gmail.com'],
            [
                'nama_pengguna' => 'Superadmin',
                'kata_sandi' => Hash::make('password123'),
                'peran' => 'superadmin',
                'status' => 'Aktif',
            ]
        );

        Pengguna::updateOrCreate(
            ['email' => 'admindonor@gmail.com'],
            [
                'nama_pengguna' => 'Admin',
                'kata_sandi' => Hash::make('donor123'),
                'peran' => 'admin',
                'status' => 'Aktif', // pastikan huruf besar
            ]
        );

    }
}
