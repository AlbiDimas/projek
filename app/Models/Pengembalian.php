<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';

    protected $fillable =
    [
        'tgl_pengembalian',
        'barang_id',
        'penyewa',
        'kontak',
        'foto_barang',
        'kondisi_id',
        'qty'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class);
    }
}
