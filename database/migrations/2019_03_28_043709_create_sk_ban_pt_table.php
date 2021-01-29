<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkBanPtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_ban_pt', function (Blueprint $table) {
            $table->string('nomor_sk_ban_pt', 50)->primary();
            $table->char('kode_program_studi');
            $table->string('tgl_mulai_sk');
            $table->string('tgl_akhir_sk');
            $table->char('peringkat');
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
        Schema::dropIfExists('sk_ban_pt');
    }
}
