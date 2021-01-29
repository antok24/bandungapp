<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $table = 'surat_keluar';
	protected $primaryKey = 'no_surat';
    protected $fillable = ['no_surat','tujuan_kepada', 'tujuan_alamat', 'perihal', 'lampiran', 'tgl_surat', 'file_sk', 'user_create'];
}
