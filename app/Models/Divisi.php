<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    // digunakan ketika menggunakan create()
    protected $fillable = ['nama_divisi'];
}
