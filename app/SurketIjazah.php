<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurketIjazah extends Model
{
    protected $table = 't_surket_ijazah';
	protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'nama_mahasiswa', 'no_surat', 'nama_instansi', 'kota_instansi', 'kode_program_studi', 'nama_program_studi', 'singkatan', 'nama_fakultas', 'nama_pendidikan_akhir', 'no_ijazah_d', 'no_ijazah_a', 'sks_yudisium', 'nomor_sk_rektor', 'tanggal_sk', 'masa_registrasi_awal', 'masa_registrasi_akhir'];
}
