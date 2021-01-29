<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSurketMhsAktifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_surket_mhs_aktif', function (Blueprint $table) {
            $table->char('no_surat', 5)->primary();
            $table->char('nim', 9);
            $table->string('nama_mahasiswa', 100);
            $table->string('tempat_lahir_mahasiswa', 150);
            $table->date('tgl_lahir');
            $table->string('nama_program_studi', 100);
            $table->string('nama_fakultas', 100);
            $table->char('mr_awal', 6);
            $table->char('mr_akhir', 6);
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
        Schema::dropIfExists('t_surket_mhs_aktif');
    }
}
