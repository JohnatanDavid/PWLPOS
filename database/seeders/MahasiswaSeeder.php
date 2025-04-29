<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('mahasiswa')->insert([
            ['id' => 1, 'nama' => 'Andi', 'nim' => '12345', 'jurusan' => 'Informatika'],
            ['id' => 2, 'nama' => 'Budi', 'nim' => '67890', 'jurusan' => 'Sistem Informasi'],
        ]);
        
    }
}
