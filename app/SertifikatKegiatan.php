<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SertifikatKegiatan extends Model
{
     protected $table = 'm_sertifikat_keg';
	protected $primaryKey = 'id';
    protected $fillable = ['id','nim','nama','no_sertifikat', 'sebagai', 'kegiatan', 'tgl_kegiatan', 'tgl_sertifikat'];
}
