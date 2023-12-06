<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'data_pembelian';
    protected $primaryKey = 'id_transaksi';
    protected $guarded= [];
}
