<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'nama_barang' => 'Buku Tulis',
                'harga_barang' => '2000',
                'deskripsi_barang' => 'Buku Tulis sidu anak-anak',
                'satuan_id' => 1
            ],
        ]);
    }
}
