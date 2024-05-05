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
                'kode_barang' => '0001',
                'nama_barang' => 'Roti',
                'harga_barang'=> 20000,
                'deskripsi_barang' => 'Roti enak',
                'satuan_barang_id' => 1
            ],
        ]);
    }
}
