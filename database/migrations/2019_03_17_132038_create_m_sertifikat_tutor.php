<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSertifikatTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_sertifikat_tutor', function (Blueprint $table) {
            $table->string('id_tutor', 9)->primarykey();
            $table->string('nama', 255);
            $table->string('kode_kegiatan', 5);
            $table->string('no_sertifikat');
            $table->string('sebagai');
            $table->string('tgl_pelaksanaan');
            $table->string('tgl_sertifikat');
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
        Schema::dropIfExists('m_sertifikat_tutor');
    }
}
