<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori: Sepatu (ID: 1)
            ['kategori_id' => 1, 'barang_kode' => 'SPT001', 'barang_nama' => 'Sepatu Lari Nike', 'harga_beli' => 500000, 'harga_jual' => 650000],
            ['kategori_id' => 1, 'barang_kode' => 'SPT002', 'barang_nama' => 'Sepatu Futsal Adidas', 'harga_beli' => 480000, 'harga_jual' => 600000],

            // Kategori: Pakaian (ID: 2)
            ['kategori_id' => 2, 'barang_kode' => 'PKN001', 'barang_nama' => 'Kaos Polos Hitam', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['kategori_id' => 2, 'barang_kode' => 'PKN002', 'barang_nama' => 'Jaket Hoodie Pria', 'harga_beli' => 120000, 'harga_jual' => 150000],

            // Kategori: Alat Olahraga (ID: 3)
            ['kategori_id' => 3, 'barang_kode' => 'ALO001', 'barang_nama' => 'Matras Yoga', 'harga_beli' => 70000, 'harga_jual' => 95000],
            ['kategori_id' => 3, 'barang_kode' => 'ALO002', 'barang_nama' => 'Bola Basket Molten', 'harga_beli' => 200000, 'harga_jual' => 250000],

            // Kategori: Buku (ID: 4)
            ['kategori_id' => 4, 'barang_kode' => 'BUK001', 'barang_nama' => 'Novel Laskar Pelangi', 'harga_beli' => 60000, 'harga_jual' => 85000],
            ['kategori_id' => 4, 'barang_kode' => 'BUK002', 'barang_nama' => 'Buku PHP Laravel', 'harga_beli' => 90000, 'harga_jual' => 120000],

            // Kategori: Aksesoris (ID: 5)
            ['kategori_id' => 5, 'barang_kode' => 'AKS001', 'barang_nama' => 'Topi Snapback', 'harga_beli' => 40000, 'harga_jual' => 60000],
            ['kategori_id' => 5, 'barang_kode' => 'AKS002', 'barang_nama' => 'Jam Tangan Digital', 'harga_beli' => 100000, 'harga_jual' => 135000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
