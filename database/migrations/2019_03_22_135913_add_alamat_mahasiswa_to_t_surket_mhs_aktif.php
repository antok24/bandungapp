<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlamatMahasiswaToTSurketMhsAktif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_surket_mhs_aktif', function (Blueprint $table) {
            $table->string('alamat_mahasiswa', 200)->after('nama_fakultas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_surket_mhs_aktif', function (Blueprint $table) {
            $table->dropColumn('alamat_mahasiswa');
        });
    }
}
