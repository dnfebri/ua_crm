<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // digunakan ketika menggunakan create()
    protected $fillable = [
        'nik',

    ];
}
