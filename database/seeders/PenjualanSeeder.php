<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'TRX001',
                'penjualan_tanggal' => Carbon::parse('2024-04-01 10:15:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Siti Aminah',
                'penjualan_kode' => 'TRX002',
                'penjualan_tanggal' => Carbon::parse('2024-04-01 11:00:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Andi Wijaya',
                'penjualan_kode' => 'TRX003',
                'penjualan_tanggal' => Carbon::parse('2024-04-02 09:45:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Rina Marlina',
                'penjualan_kode' => 'TRX004',
                'penjualan_tanggal' => Carbon::parse('2024-04-02 14:30:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Dedi Kurniawan',
                'penjualan_kode' => 'TRX005',
                'penjualan_tanggal' => Carbon::parse('2024-04-03 08:50:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Tina Agustina',
                'penjualan_kode' => 'TRX006',
                'penjualan_tanggal' => Carbon::parse('2024-04-03 16:10:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Lina Permata',
                'penjualan_kode' => 'TRX007',
                'penjualan_tanggal' => Carbon::parse('2024-04-04 09:20:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Rudi Hartono',
                'penjualan_kode' => 'TRX008',
                'penjualan_tanggal' => Carbon::parse('2024-04-04 13:45:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Yeni Lestari',
                'penjualan_kode' => 'TRX009',
                'penjualan_tanggal' => Carbon::parse('2024-04-05 10:10:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Rangga Saputra',
                'penjualan_kode' => 'TRX010',
                'penjualan_tanggal' => Carbon::parse('2024-04-05 15:25:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Farah Nabila',
                'penjualan_kode' => 'TRX011',
                'penjualan_tanggal' => Carbon::parse('2024-04-06 08:30:00'),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Eka Putri',
                'penjualan_kode' => 'TRX012',
                'penjualan_tanggal' => Carbon::parse('2024-04-06 14:00:00'),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
