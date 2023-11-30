<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'barang_nama' => 'Mur',
            'barang_deskripsi' => 'Mur Baja',
            'barang_stock' => '20000',
            'kategori_id' => 1
        ]);
    }
}
