<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTMATPEM extends Model
{
    protected $table = 't_formulir_ttm_atpem';
    protected $fillable = ['masa','nim','nama_mahasiswa','kode_mtk','kode_prodi','semester','nama_program_studi','nomor_hp','lokasi'];
}
