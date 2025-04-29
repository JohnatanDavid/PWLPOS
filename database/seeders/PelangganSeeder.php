<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggans')->insert([
            ['nama' => 'Andi', 'email' => 'andi@gmail.com', 'no_hp' => '08123456789', 'alamat' => 'Jl. Mawar No. 1'],
            ['nama' => 'Budi', 'email' => 'budi@gmail.com', 'no_hp' => '08234567890', 'alamat' => 'Jl. Melati No. 2'],
        ]);
        
    }
}
