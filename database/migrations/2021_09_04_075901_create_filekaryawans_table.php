<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilekaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filekaryawans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_karyawan')->unique();
            $table->string('foto');
            $table->string('ktp');
            $table->string('kartu_keluarga');
            $table->string('ijazah');
            $table->string('rek_mandiri');
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
        Schema::dropIfExists('filekaryawans');
    }
}
