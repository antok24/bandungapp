<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = 'surat_masuk';
	protected $primaryKey = 'no_agenda';
    protected $fillable = ['no_agenda','no_surat', 'asal_surat', 'sifat_surat', 'perihal', 'tgl_agenda', 'tgl_surat', 'status', 'file_sm', 'user_create'];
}
