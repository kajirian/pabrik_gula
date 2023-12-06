<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
  
    protected $table = 'data_mutasi_stok';
    protected $primaryKey = 'id_mutasi';
    protected $guarded= [];
}
