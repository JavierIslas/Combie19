<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use App\Models\Viaje;
use App\Models\User;
use App\Models\Pasaje;

class PasajesController extends Controller
{
    public function index()
    {
        $viajes = DB::table('viajes')->where('asientos_disponibles', '>', 0)->get();
        return view('Pasajes.index',compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $rutas = Ruta::get();
        return view('Pasajes.create',compact('rutas'),['viaje' => new Viaje]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $viaje = Viaje::find($request->viaje_id);
       $usuario = Usuario::find($request->usuario_id);
       $request->validate([
            'viaje_id'=> 'required',
            'usuario_id'=> 'required',
            'estado' => 'required',
         ]);
       Pasaje::create( [
            'viaje_id'=> $request->viaje_id,
            'usuario_id'=> $request->usuario_id,
            'estado' => 'reservado',
        ]);
      return redirect()->route('Pasajes.index')->with('status', __('Pasaje reservado Satisfactoriamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $pasaje = Pasaje::find($id);
       return view('Pasajes.show',['pasaje' => Pasaje::findOrFail($id)],['viaje' => Viaje::find($pasaje->viaje_id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $pasaje = Pasaje::get();
        return view('Pasajes.edit',compact('pasaje'),['pasaje' => Pasaje::findOrFail($id)]);
        
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
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *//*
    public function destroy($id)
    {
        $viaje=Viaje::findOrFail($id);
             
        try {
                Viaje::destroy($id);
                return redirect()->route('administracionViajes.index')->with('status', __('Viaje eliminado satisfactoriamente.'));
             } catch (QueryException $e) {
                  return redirect()->route('administracionViajes.show', $id)->with('status', __('El viaje no puede ser elimindo'));
            }
    
    }*/
}
