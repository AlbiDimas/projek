<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $fillable =
    [   
        'nama',
        'slug'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function mesin()
    {
        return $this->hasMany(Mesin::class);
    }
}
