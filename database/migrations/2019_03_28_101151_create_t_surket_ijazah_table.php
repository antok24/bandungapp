<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSurketIjazahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_surket_ijazah', function (Blueprint $table) {
            $table->char('nim', 9)->primary();
            $table->string('nama_mahasiswa', 100);
            $table->string('no_surat', 40);
            $table->string('nama_instansi', 150);
            $table->string('kota_instansi', 100);
            $table->char('kode_program_studi', 5);
            $table->string('nama_program_studi', 100);
            $table->string('singkatan', 20);
            $table->string('nama_fakultas', 100);
            $table->string('nama_pendidikan_akhir', 100);
            $table->string('no_ijazah_d', 50);
            $table->string('no_ijazah_a', 50);
            $table->char('sks_yudisium', 3);
            $table->string('nomor_sk_rektor', 100);
            $table->char('tanggal_sk', 30);
            $table->char('masa_registrasi_awal', 6);
            $table->char('masa_registrasi_akhir', 6);
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
        Schema::dropIfExists('t_surket_ijazah');
    }
}
