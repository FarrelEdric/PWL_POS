<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'String',
                'kategori_nama' => 'elektronik',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'String',
                'kategori_nama' => 'skincare',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'String',
                'kategori_nama' => 'snack',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'String',
                'kategori_nama' => 'baju',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'String',
                'kategori_nama' => 'celana',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
