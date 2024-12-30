<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPcsSeeder extends Seeder
{
    public function run()
    {
        DB::table('jenis_pcs')->insert([
            ['jenis' => 'Reguler', 'harga' => 7],
            ['jenis' => 'VIP', 'harga' => 10],
            ['jenis' => 'VVIP', 'harga' => 14],
        ]);
    }
}
