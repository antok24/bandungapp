<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
	protected $table = 'programstudi';
	protected $primaryKey = 'kode_ps';
    protected $fillable = ['kode_ps','nama_programstudi'];
}
