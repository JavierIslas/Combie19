<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsumoComprado extends Model
{
    protected $table = "insumosComprados";
    protected $fillable = ['usuario_id', 'insumo_id', 'viaje_id'];
    use HasFactory;
}
