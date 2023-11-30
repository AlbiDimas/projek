<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable =
    [
        'barang_nama',
        'foto',
        'jumlah',
        'barang_stock',
        'kategori_id',
        'barang_deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function sewa()
    {
        return $this->hasMany(Sewa::class);
    }

    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class);
    }

    public function barang()
    {
        return $this->hasMany(DetailPeminjaman::class); 
    }
}
