<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai')->insert([
            ['mahasiswa_id' => 1, 'mata_kuliah_id' => 1, 'nilai' => 88.50],
            ['mahasiswa_id' => 1, 'mata_kuliah_id' => 2, 'nilai' => 75.00],
            ['mahasiswa_id' => 2, 'mata_kuliah_id' => 1, 'nilai' => 90.00],
        ]);
        
    }
}
