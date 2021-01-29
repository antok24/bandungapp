<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    protected $table = 'm_pejabat';
	protected $primaryKey = 'nip';
    protected $fillable = ['nip','nama_pegawai', 'jabatan', 'sub_bagian', 'ttd_sertifikat'];
}
