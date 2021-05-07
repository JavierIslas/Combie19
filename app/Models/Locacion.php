<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacion extends Model
{
	protected $table = "lugares";
	protected $fillable = ['ciudad', 'provincia'];
    use HasFactory;
}
