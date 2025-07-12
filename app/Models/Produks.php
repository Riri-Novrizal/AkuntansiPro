<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
    protected $fillable = ["nama","satuan","harga_beli"];
    protected $table = "produks";
}
