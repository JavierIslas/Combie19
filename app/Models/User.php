<?php

namespace App\Models;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isClient(){ 
        $fila = DB::table('users')->where('id','=', Auth::id())->value('gold');
        return $fila <= 1;
    }

    public static function isAdmin(){
        $fila = DB::table('users')->where('id','=', Auth::id())->value('gold');
        return $fila == 3;
    }

    public static function isDriver(){
        $fila = DB::table('users')->where('id','=', Auth::id())->value('gold');
        return $fila == 2;
    }

    public static function puedeComentar(){
        return DB::table('users')->where('id','=', Auth::id())->value('compro');
    }

    public static function tienePasajes(){
        $pasajes = DB::table('pasajes')->where('usuario_id','=', Auth::id())->get();
        if(count($pasajes) > 0){
            echo $pasajes;
            return true;
        }
        return false;
    }
}
