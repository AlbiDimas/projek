<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';

    protected $fillable =
    [
        'nama',
        'asal_sekolah',
        'kontak',
        'alamat',
        'tempat_lahir',
        'tgl_lahir',
        'perusahaan_id',
        'identitas',
        'status_id'
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }


}
