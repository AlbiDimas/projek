<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewa';
    protected $fillable =
    [
        'tgl_sewa',
        'barang_id',
        'penyewa',
        'alamat',
        'kontak',
        'nilai_sewa',
        'legalitas',
        'tgl_kembali',
        'qty'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
