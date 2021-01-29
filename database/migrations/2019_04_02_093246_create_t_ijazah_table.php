<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTIjazahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_ijazah', function (Blueprint $table) {
            $table->char('nim', 9)->primary();
            $table->string('nama_mahasiswa', 100);
            $table->string('tempat_lahir', 100);
            $table->char('tgl_lahir', 10);
            $table->char('kode_kabko', 6)->nullable();
            $table->char('kode_kabko_pokjar', 6)->nullable();
            $table->char('kode_program_studi', 5);
            $table->string('no_ijazah_d', 100);
            $table->string('no_ijazah_a', 100)->nullable();
            $table->string('nomor_sk_rektor', 60);
            $table->string('no_surat', 60);
            $table->char('status_ijazah', 2)->nullable();
            $table->char('status_transkrip_nilai', 2)->nullable();
            $table->char('status_pendamping_ijazah', 2)->nullable();
            $table->char('status_ijazah_akta', 2)->nullable();
            $table->char('tgl_terima', 10);
            $table->string('user_create', 100);
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
        Schema::dropIfExists('t_ijazah');
    }
}
