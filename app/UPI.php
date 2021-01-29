<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UPI extends Model
{
    protected $table = 't_upi';
	protected $primaryKey = 'nim';
    protected $fillable = ['nim','nomor_sk_upi', 'tgl_pendaftaran', 'user_create'];
}
