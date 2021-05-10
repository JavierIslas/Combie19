<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
	protected $table = "rutas";
	protected $fillable = ['origen','destino','combie_id','duracion','distancia'];
    use HasFactory;
}
