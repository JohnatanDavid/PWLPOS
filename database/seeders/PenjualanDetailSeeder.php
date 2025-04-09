<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // TRX001
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 650000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 600000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 75000,  'jumlah' => 2],

            // TRX002
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 150000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 95000,  'jumlah' => 2],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 1],

            // TRX003
            ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 85000,  'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 120000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 60000,  'jumlah' => 1],

            // TRX004
            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 135000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 1, 'harga' => 650000,  'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 3, 'harga' => 75000,   'jumlah' => 1],

            // TRX005
            ['penjualan_id' => 5, 'barang_id' => 5, 'harga' => 95000,  'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 2],
            ['penjualan_id' => 5, 'barang_id' => 8, 'harga' => 120000, 'jumlah' => 1],

            // TRX006
            ['penjualan_id' => 6, 'barang_id' => 2, 'harga' => 600000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 4, 'harga' => 150000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 7, 'harga' => 85000,  'jumlah' => 2],

            // TRX007
            ['penjualan_id' => 7, 'barang_id' => 9, 'harga' => 60000,  'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 10, 'harga' => 135000,'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 1, 'harga' => 650000, 'jumlah' => 1],

            // TRX008
            ['penjualan_id' => 8, 'barang_id' => 2, 'harga' => 600000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 3, 'harga' => 75000,  'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 5, 'harga' => 95000,  'jumlah' => 1],

            // TRX009
            ['penjualan_id' => 9, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 7, 'harga' => 85000,  'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 8, 'harga' => 120000, 'jumlah' => 1],

            // TRX010
            ['penjualan_id' => 10, 'barang_id' => 9, 'harga' => 60000,  'jumlah' => 2],
            ['penjualan_id' => 10, 'barang_id' => 10, 'harga' => 135000,'jumlah' => 1],
            ['penjualan_id' => 10, 'barang_id' => 4, 'harga' => 150000, 'jumlah' => 1],

            // TRX011
            ['penjualan_id' => 11, 'barang_id' => 1, 'harga' => 650000, 'jumlah' => 1],
            ['penjualan_id' => 11, 'barang_id' => 3, 'harga' => 75000,  'jumlah' => 1],
            ['penjualan_id' => 11, 'barang_id' => 5, 'harga' => 95000,  'jumlah' => 1],

            // TRX012
            ['penjualan_id' => 12, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 1],
            ['penjualan_id' => 12, 'barang_id' => 8, 'harga' => 120000, 'jumlah' => 1],
            ['penjualan_id' => 12, 'barang_id' => 10, 'harga' => 135000,'jumlah' => 1],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
