<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'John Doe',
                'penjualan_kode' =>  'JD001',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Fruanticx',
                'penjualan_kode' =>  'JD002',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'arata',
                'penjualan_kode' =>  'JD003',
                'penjual_tanggal' => '2023-10-20',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'imron',
                'penjualan_kode' =>  'JD004',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'ujang',
                'penjualan_kode' =>  'JD005',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'ganyang',
                'penjualan_kode' =>  'JD006',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'jeti',
                'penjualan_kode' =>  'JD006',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'tuer',
                'penjualan_kode' =>  'JD008',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Fanny',
                'penjualan_kode' =>  'JD009',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'valentina',
                'penjualan_kode' =>  'JD0010',
                'penjual_tanggal' => '2023-10-20',

            ],
            [
                'penjualan_id' => 11,
                'user_id' => 3,
                'pembeli' => 'gelok',
                'penjualan_kode' =>  'JD0011',
                'penjual_tanggal' => '2023-10-20',

            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
