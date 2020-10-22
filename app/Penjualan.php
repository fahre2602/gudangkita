<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'nama_pembeli',
        'email',
        'no_telepon',
        'mobil_id'
    ];
}
