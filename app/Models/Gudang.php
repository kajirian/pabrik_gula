<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    protected $table = 'data_gudang';
    protected $primaryKey = 'id_gudang';
    protected $guarded= [];
}
