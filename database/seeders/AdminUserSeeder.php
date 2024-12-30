<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan user admin jika belum ada
        User::firstOrCreate([
            'email' => 'admin@gmail.com', // Mencari berdasarkan email admin
        ], [
            'name' => 'admin',  // Jika tidak ada, buat username admin
            'password' => Hash::make('adminpassword'),  // Set password yang sudah di-hash
            'role' => 'admin',  // Set role sebagai admin
        ]);
    }
}
