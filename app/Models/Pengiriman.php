<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'data_pengiriman';
    protected $primaryKey = 'id_pengiriman';
    protected $guarded= [];
}
