<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disporseni extends Model
{
    protected $table = 'm_sertifikat_disporseni';
	protected $primaryKey = 'nim';
    protected $fillable = ['nim','nama_mahasiswa', 'sebagai', 'jenis_lomba', 'no_sertifikat','tanggal_pelaksanaan','tanggal_sertifikat','nip_ttd','user_create'];
}
