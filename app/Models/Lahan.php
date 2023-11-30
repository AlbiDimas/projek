<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;

    protected $table = 'lahan';

    protected $fillable =
    [
        'nama_ikm',
        'penanggung_jawab',
        'alamat',
        'no_hp',
        'lokasi_lahan',
        'luas_lahan',
        'legalitas1',
        'ktp'
    ];
}
