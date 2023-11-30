<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buatmesin extends Model
{
    use HasFactory;

    protected $table = 'buat_mesin';

    protected $fillable =
    [
        'nama',
        'spesifik',
        'pict'
    ];
}
