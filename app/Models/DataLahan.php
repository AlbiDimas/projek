<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLahan extends Model
{
    use HasFactory;

    protected $table = 'data_lahan';

    protected $fillable =
    [
        'lokasi_lahan',
        'luas_lahan',
        'penanggung_jawab',
        'foto_lahan'
    ];
}
