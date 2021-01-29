<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkbjjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkbjj', function (Blueprint $table) {
            $table->string('nim', 9);
            $table->string('nama_mhs', 120);
            $table->string('kode_ps', 9);
            $table->string('kode_sertifikat', 5);
            $table->string('no_sertifikat', 50);
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
        Schema::dropIfExists('pkbjj');
    }
}
