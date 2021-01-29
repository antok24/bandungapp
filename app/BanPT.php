<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanPT extends Model
{
    protected $table = 'sk_ban_pt';
    protected $fillable = ['id','kode_program_studi', 'nomor_sk_ban_pt', 'tgl_mulai_sk', 'tgl_akhir_sk', 'peringkat'];
}
