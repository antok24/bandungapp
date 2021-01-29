<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTDisposisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_disposisi', function (Blueprint $table) {
            $table->string('no_agenda', 15)->primary();
            $table->string('no_surat', 80);
            $table->char('ditujukan', 75);
            $table->text('keterangan');
            $table->date('tgl_disposisi');
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
        Schema::dropIfExists('t_disposisi');
    }
}
