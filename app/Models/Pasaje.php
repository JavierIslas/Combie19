<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasaje extends Model
{
    use HasFactory;
    protected $table = "viajes";
    protected $fillable = ['viaje_id', 'usuario_id', 'estado'];
}
