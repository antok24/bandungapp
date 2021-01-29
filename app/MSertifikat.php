<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSertifikat extends Model
{
    protected $table = 'm_sertifikat';
	protected $primaryKey = 'kode_sertifikat';
    protected $fillable = ['kode_sertifikat','nama_kegiatan', 'tahun'];
}
