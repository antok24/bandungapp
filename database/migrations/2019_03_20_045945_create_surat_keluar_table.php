<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->string('no_surat')->primary();
            $table->string('tujuan_kepada', 50);
            $table->text('tujuan_alamat');
            $table->text('perihal');
            $table->string('lampiran', 100);
            $table->date('tgl_surat');
            $table->string('file_sm', 150);
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
        Schema::dropIfExists('surat_keluar');
    }
}
