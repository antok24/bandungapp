<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Osmb extends Model
{
    protected $table = 'm_sertifikat_osmb';
	protected $primaryKey = 'nim';
    protected $fillable = ['nim','nama', 'program_studi', 'kode_kegiatan', 'no_sertifikat', 'sebagai', 'tgl_pelaksanaan', 'tgl_sertifikat'];
}
