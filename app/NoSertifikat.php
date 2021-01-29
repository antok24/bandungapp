<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoSertifikat extends Model
{
    protected $table = 'nosertifikat';
	protected $primaryKey = 'no_sertifikat';
    protected $fillable = ['no_sertifikat','kode_sertifikat', 'tgl_pelaksanaan', 'tgl_sertifikat'];
}
