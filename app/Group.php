<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'mgroup';
    protected $fillable = ['id_group','namagroup'];
}
