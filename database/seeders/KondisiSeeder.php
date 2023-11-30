<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Kondisi;

class KondisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kondisi = ['Baik', 'Kurang Baik', 'Rusak'];

        foreach ($kondisi as  $value) {
            Kondisi::create([
                'kondisi' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
