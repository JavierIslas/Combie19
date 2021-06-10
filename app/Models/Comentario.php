<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'comment'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Hay que ver si esto sierve
    //public function ratings(){
    //    return $this->hasMany('App\Models\Rating');}

}
