<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    use HasFactory;

    protected $table = 'kondisi_barang';

    protected $fillable = ['kondisi', 'slug'];

    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class);
    }
}
