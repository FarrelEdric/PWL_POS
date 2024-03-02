<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'kode_barang' => 'LP',
                'barang_nama' => 'laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'kode_barang' => 'TV',
                'barang_nama' => 'Television',
                'harga_beli' => 2000000,
                'harga_jual' => 3000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'kode_barang' => 'MOGI',
                'barang_nama' => 'momogi',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 3,
                'kode_barang' => 'SR',
                'barang_nama' => 'sari roti',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'kode_barang' => 'KP',
                'barang_nama' => 'kacang pilus',
                'harga_beli' => 9000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'kode_barang' => 'ST',
                'barang_nama' => 'skintific',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 1,
                'kode_barang' => 'RD',
                'barang_nama' => 'radio',
                'harga_beli' => 1000000,
                'harga_jual' => 1600000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 1,
                'kode_barang' => 'A1',
                'barang_nama' => 'AC',
                'harga_beli' => 1000000,
                'harga_jual' => 2600000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 1,
                'kode_barang' => 'KA',
                'barang_nama' => 'Kipas angin',
                'harga_beli' => 2000000,
                'harga_jual' => 3600000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'kode_barang' => 'PS',
                'barang_nama' => 'polo  shirt',
                'harga_beli' => 100000,
                'harga_jual' => 260000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 1,
                'kode_barang' => 'MC',
                'barang_nama' => 'mesin cuci',
                'harga_beli' => 3000000,
                'harga_jual' => 5600000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
