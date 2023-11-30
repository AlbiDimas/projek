<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    use HasFactory;

    protected $table = 'mesin';

    protected $fillable =
    [
        'mesin_nama',
        'pemesan',
        'mesin_spesifikasi',
        'mesin_jumlah',
        'kategori_id',
        'tgl_selesai',
        'foto_mesin'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function pemesan()
    {
        return $this->hasMany(Pemesan::class);
    }




}
