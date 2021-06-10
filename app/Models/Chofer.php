<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{

	protected $table = "choferes";
	protected $fillable = ['last_name', 'name', 'email', 'password', 'phone', 'birthday', 'extra'];
    use HasFactory;
}
