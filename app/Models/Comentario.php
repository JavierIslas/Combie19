<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'rating', 'descripcion'];

    public static function primerosTres(){
        $comentario = DB::table('comentarios')->first();
        return $comentario;
    }
}
