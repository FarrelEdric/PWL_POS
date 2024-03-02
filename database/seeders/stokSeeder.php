<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-20',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-10',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'user_id' => 3,
                'stok_tanggal' => '2025-08-10',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'user_id' => 3,
                'stok_tanggal' => '2025-11-11',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 5,
                'barang_id' => 5,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-14',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-14',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'user_id' => 3,
                'stok_tanggal' => '2025-09-20',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'user_id' => 3,
                'stok_tanggal' => '2026-05-11',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-14',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'user_id' => 3,
                'stok_tanggal' => '2025-06-10',
                'stok_jumlah' => 10,

            ],
            [
                'stok_id' => 11,
                'barang_id' => 11,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-11',
                'stok_jumlah' => 10,

            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
