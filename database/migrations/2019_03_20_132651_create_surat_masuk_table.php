<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->string('no_agenda', 15)->primary();
            $table->string('no_surat', 80);
            $table->text('asal_surat');
            $table->char('sifat_surat', 50);
            $table->text('perihal');
            $table->date('tgl_agenda');
            $table->date('tgl_surat');
            $table->string('status', 1)->COMMENT('1=Diterima, 2=Terdisposisi, 0=Ok');
            $table->string('user_create', 100);
            $table->string('file_sm', 150);
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
        Schema::dropIfExists('surat_masuk');
    }
}
