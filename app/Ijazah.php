<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    protected $table = 't_ijazah';
	protected $primaryKey = 'nim';
    protected $fillable = ['nim','kode_kabko', 'kode_kabko_pokjar', 'kode_program_studi', 'no_ijazah_d', 'no_ijazah_a', 'nomor_sk_rektor', 'status_ijazah', 'status_transkrip_nilai', 'status_pendamping_ijazah', 'status_ijazah_akta', 'tgl_terima', 'tgl_penyerahan_ke_mhs', 'proses_penyerahan', 'no_urut_penyimpanan', 'amplop', 'penyimpanan', 'user_create','pengambil','menyerahkan','srt_kuasa'];
}
