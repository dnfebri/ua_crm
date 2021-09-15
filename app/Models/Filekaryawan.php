<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filekaryawan extends Model
{
    use HasFactory;

    // digunakan ketika menggunakan create()
    protected $fillable = [
        'id_karyawan',
        'foto',
        'ktp',
        'kartu_keluarga',
        'ijazah',
        'rek_mandiri',
    ];
}
