<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SertifikatAll extends Model
{
    protected $table = 't_sertifikat_all';
    protected $fillable = ['nim','nama', 'kode_kegiatan', 'no_sertifikat', 'sebagai', 'tgl_pelaksanaan', 'tgl_sertifikat', 'tema','narasumber', 'lokasi', 'ttd_nip'];
}
