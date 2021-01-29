<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoIjazah extends Model
{
    protected $table = 't_foto_ijazah';
	protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'nik','nama_mahasiswa', 'tempat_lahir', 'tgl_lahir', 'nomor_hp', 'kode_kabko', 'alamat_mahasiswa', 'kode_kabko_pokjar', 'alamat_pokjar','kode_program_studi', 'nama_program_studi', 'nama_fakultas','no_ijazah_d', 'no_ijazah_a', 'nomor_sk_rektor', 'tanggal_sk', 'ipk', 'status_foto','tgl_terima', 'tgl_kirim_ke_pusat', 'user_create'];
}
