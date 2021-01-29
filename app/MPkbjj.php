<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPkbjj extends Model
{
    protected $table = 'm_sertifikat_pkbjj';
	protected $primaryKey = 'nim';
    protected $fillable = ['nim','nama', 'kode_kegiatan', 'no_sertifikat', 'sebagai', 'tgl_pelaksanaan', 'tgl_sertifikat'];
}
