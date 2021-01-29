<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_surket_mhs_aktif', function (Blueprint $table) {
            $table->char('kode_surat', 25)->after('no_surat');
            $table->string('user_create', 100)->after('mr_akhir');
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
            $table->dropColumn('kode_surat');
            $table->dropColumn('user_create');
        });
    }
}
