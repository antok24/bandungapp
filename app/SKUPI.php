<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SKUPI extends Model
{
    protected $table = 't_sk_upi';
	protected $primaryKey = 'nomor_sk_upi';
    protected $fillable = ['nomor_sk_upi','tgl_kegiatan', 'lokasi', 'jumlah_peserta', 'status_sk'];
}
