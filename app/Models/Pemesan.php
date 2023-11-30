<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesan extends Model
{
    use HasFactory;

    protected $table = 'pemesan';

    protected $fillable =
    [
        'nama',
        'alamat',
        'mesin_id',
        'no_kontrak',
        'tgl_kontrak',
        'nilai_kontrak',
        'foto_kontrak'

    ];

    public function mesin()
    {
        return $this->belongsTo(Mesin::class);
    }



}
