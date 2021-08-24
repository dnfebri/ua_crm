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
        'nama_karyawan',
        'club',
        'divisi',
        'jabatan',
        'jenis_kelamin',
        'no_ktp',
        'alamat_ktp',
        'alamat_tmpt_tinggal',
        'email',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telpon',
        'nama_ibu_kandung',
        'gol_darah',
        'agama',
        'status_pernikahan',
        'tanggungan_anak',
        'no_rek_mandiri',
        'no_npwp',
        'no_bpjs_kesehatan',
        'no_bpjs_kt',
        'no_telpon_darurat',
        'tgl_masuk',
        'tgl_perhitungan',
        'status_karyawan'
    ];
}
