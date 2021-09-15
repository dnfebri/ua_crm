<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama_karyawan');
            $table->integer('club');
            $table->integer('divisi');
            $table->integer('jabatan');
            $table->string('jenis_kelamin');
            $table->string('no_ktp');
            $table->string('alamat_ktp');
            $table->string('alamat_tmpt_tinggal');
            $table->string('email')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_telpon');
            $table->string('nama_ibu_kandung');
            $table->string('gol_darah');
            $table->string('agama');
            $table->string('status_pernikahan');
            $table->integer('tanggungan_anak');
            $table->string('no_rek_mandiri');
            $table->string('no_npwp');
            $table->string('no_bpjs_kesehatan');
            $table->string('no_bpjs_kt');
            $table->string('no_telpon_darurat');
            $table->date('tgl_masuk');
            $table->date('tgl_perhitungan')->nullable();
            $table->string('status_karyawan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}
