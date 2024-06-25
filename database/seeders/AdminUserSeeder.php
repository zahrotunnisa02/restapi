<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengecek apakah user dengan email admin@admin sudah ada
        $existingUser = User::where('email', 'admin@admin')->first();

        if (!$existingUser) {
            // Mengenkripsi password menggunakan bcrypt
            $password = bcrypt('adminadmin');

            // Membuat data user awal
            $user = [
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password' => $password,
            ];

            // Menyimpan data user ke database
            User::create($user);
        }
    }
}

