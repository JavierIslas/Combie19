<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combi extends Model
{
	protected $table = "combis";
	protected $fillable = ['model', 'patente','asientos','tipo','chofer_id'];
    use HasFactory;
}
