<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = "insumos";
	protected $fillable = ['nombre', 'precio', 'tipo'];
    use HasFactory;
}
