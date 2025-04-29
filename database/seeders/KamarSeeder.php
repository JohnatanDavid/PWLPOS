<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kamars')->insert([
            ['nomor_kamar' => '101', 'tipe' => 'Single', 'harga_per_malam' => 300000, 'status' => 'Tersedia'],
            ['nomor_kamar' => '102', 'tipe' => 'Double', 'harga_per_malam' => 450000, 'status' => 'Tersedia'],
        ]);
        
    }
}
