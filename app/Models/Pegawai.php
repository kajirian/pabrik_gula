<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'data_pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $guarded= [];
}
