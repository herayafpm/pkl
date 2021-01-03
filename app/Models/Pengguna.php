<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = [
        'desa', 'kecamatan', 'nama', 'nik', 'email', 'no_telp', 'alamat', 'status',
    ];
}
