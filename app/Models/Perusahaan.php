<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable =
    [
        'pt_logo',
        'pt_nama',
        'pt_alamat',
        'pt_number',
        'pt_cp',
        'pt_bidang'

    ];

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
