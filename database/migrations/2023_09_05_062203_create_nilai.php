<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_siswa')->unsigned();
            $table->foreign('id_siswa')->references('id')->on('siswas');
            $table->bigInteger('id_sekolah')->unsigned();
            $table->foreign('id_sekolah')->references('sekolahs_id')->on('siswas');
            $table->string('matematika');
            $table->string('bahasa_indonesia');
            $table->string('bahasa_inggris');
            $table->string('ipa');
            $table->string('agama');
            $table->string('bacaan_quran');
            $table->string('praktek_ibadah');
            $table->string('doa_harian');
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
        Schema::dropIfExists('nilai');
    }
}
