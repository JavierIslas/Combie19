<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasaje;
use App\Models\Viaje;
use Illuminate\Support\Facades\Hash;

class CompraChoferes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario= User::where('email',$request->email)->first();;
        //pregunto si existe
        if ($usuario == null) {
            //Creo al usuario
            $usuario=User::create([
            'name' => $request->name ,
            'email' => $request->email,
            'password' => Hash::make(12345678),
            'phone' => $request->phone,
            'birthday' => $request->birthday,
        ]);

        }
         
         //Hacer que el usuario compre el pasaje
       return view('Choferes.pago',['usuario' => User::find($usuario->id)], ['viaje'=> Viaje::find($request->viaje)]);
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('Choferes.register', ['viaje' => Viaje::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Choferes.iniciarSesionPasajero',['viaje' => Viaje::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
