<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservasis')->insert([
            ['pelanggan_id' => 1, 'kamar_id' => 1, 'tanggal_check_in' => '2025-05-01', 'tanggal_check_out' => '2025-05-03', 'total_biaya' => 600000],
            ['pelanggan_id' => 2, 'kamar_id' => 2, 'tanggal_check_in' => '2025-05-05', 'tanggal_check_out' => '2025-05-06', 'total_biaya' => 450000],
        ]);
        
    }
}
