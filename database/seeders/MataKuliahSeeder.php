<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('mata_kuliah')->insert([
            ['id' => 1, 'nama' => 'Basis Data', 'sks' => 3],
            ['id' => 2, 'nama' => 'Algoritma', 'sks' => 2],
        ]);
        
    }
}
