<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PcsSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('pcs')->insert([
                'nama_pc' => 'PC' . $i,
                'jenis_id' => rand(1, 3), // Rentang jenis 1-3
            ]);
        }
    }
}