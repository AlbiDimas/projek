<?php

namespace Database\Seeders;

use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data 1
        Peminjaman::created(
            [
                'kode_pinjam' => random_int(100000000, 999999999),
                'pemiinjaman_id' => 3,
                'admin_pinjam' => 1,
                'admin_kembali' => 1,
                'status' => 3,
                'denda' => 0,
                'tgl_pinjam' => now()->subDays(20),
                'tgl_kembali' => now()->subDays(11)
            ]
        );

        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'barang_id' => 1
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'barang_id' => 2
        ]);

        //Data 2
        Peminjaman::created(
            [
                'kode_pinjam' => random_int(100000000, 999999999),
                'pemiinjaman_id' => 3,
                'admin_pinjam' => 2,
                'admin_kembali' => 2,
                'status' => 2,
                'tgl_pinjam' => now(),
                'tgl_kembali' => now()->subDays(11)
            ]
        );

        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'barang_id' => 4
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'barang_id' => 3
        ]);
    }
}
