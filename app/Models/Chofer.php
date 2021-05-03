<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{

	protected $table = "choferes"; //por si todo se rompe porque no encuentra la tabla choferes
	protected $fillable = ['last_name', 'name', 'email', 'password', 'phone', 'birthday', 'extra'];
    use HasFactory;
}
