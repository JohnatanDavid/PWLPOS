<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1, 
                'username' => 'admin', 
                'name' => 'Administrator', 
                'password' => Hash::make('12345'),
            ], // class untuk mengenkripsi/hash password
            [
                'user_id' => 2, 
                'username' => 'manager', 
                'name' => 'Manager', 
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 3, 
                'username' => 'staff', 
                'name' => 'Staff/Kasir', 
                'password' => Hash::make('12345'),
            ],
        ];
        DB::table('m_user')->insert($data);
    }
}
