<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    protected $table = "viajes";
    protected $fillable = ['precio','fecha','horario_Salida','horario_Llegada','ruta_id','asientos_disponibles', 'chofer_id'];
}
