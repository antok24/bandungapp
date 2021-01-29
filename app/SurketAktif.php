<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurketAktif extends Model
{
    protected $table = 't_surket_mhs_aktif';
	protected $primaryKey = 'no_surat';
    protected $fillable = ['no_surat', 'kode_surat', 'nim', 'nama_mahasiswa', 'tempat_lahir_mahasiswa', 'tgl_lahir', 'nama_program_studi', 'nama_fakultas', 'alamat_mahasiswa', 'mr_awal', 'mr_akhir', 'nip_ttd','user_create'];
}
