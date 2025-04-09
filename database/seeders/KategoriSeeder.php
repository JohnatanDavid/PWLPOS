<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'SPT', 'kategori_nama' => 'Sepatu'],
            ['kategori_kode' => 'PKN', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'ALO', 'kategori_nama' => 'Alat Olahraga'],
            ['kategori_kode' => 'BUK', 'kategori_nama' => 'Buku'],
            ['kategori_kode' => 'AKS', 'kategori_nama' => 'Aksesoris'],
        ];
        
        DB::table('m_kategori')->insert($data);
    }
}
