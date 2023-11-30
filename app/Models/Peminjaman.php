<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable =
    [
        'kode_pinjam',
        'customer_id',
        'admin_pinjam',
        'admin_kembali',
        'status',
        'denda',
        'jumlah',
        'tgl_pinjam',
        'tgl_kembali'
    ];

    // Relationship
    public function detail_peminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accecor


}
