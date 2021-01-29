<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNipTtdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_surket_mhs_aktif', function (Blueprint $table) {
            $table->char('nip_ttd', 25)->after('mr_akhir');
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
            $table->dropColumn('nip_ttd');
        });
    }
}
