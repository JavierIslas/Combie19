<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Viaje;
use App\Models\Ruta;
use App\Models\Locacion;
use App\Models\Combi;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje::get();
        return view('Viajes.index',compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $rutas = Ruta::get();
        return view('Viajes.create',compact('rutas'),['viaje' => new Viaje]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $ruta = Ruta::find($request->ruta_id);
       $combi = Combi::find($ruta->combie_id);
       $request->validate([
             'precio'=> 'required|numeric|Min:1',
             'fecha'=> 'required|Date',
             'horario_Salida'=>'required|date_format:H:i',
             'horario_Llegada'=>'required|date_format:H:i',
             'ruta_id'=> 'required',
         ]);
       Viaje::create( [
             'asientos_disponibles'=> $combi->asientos,
             'precio'=> request('precio'),
             'fecha'=> request('fecha'),
             'horario_Salida'=> request('horario_Salida'),
             'horario_Llegada'=> request('horario_Llegada'),
             'ruta_id'=> request('ruta_id'), ]);

      return redirect()->route('administracionViajes.index')->with('status', __('Viaje dado de alta Satisfactoriamente'));;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $viaje = Viaje::find($id);
       return view('Viajes.show',['viaje' => Viaje::findOrFail($id)],['ruta' => Ruta::find($viaje->ruta_id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $rutas = Ruta::get();
        return view('Viajes.edit',compact('rutas'),['viaje' => Viaje::findOrFail($id)]);
        
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

       
            $viaje=Viaje::find($id);
            $request->validate([
             'precio'=> 'required|numeric|Min:1',
             'fecha'=> 'required|Date',
             'horario_Salida'=>'required',
             'horario_Llegada'=>'required',
            ]);

            try{

              $viaje->update( [
             'precio'=> request('precio'),
             'fecha'=> request('fecha'),
             'horario_Salida'=> request('horario_Salida'),
             'horario_Llegada'=> request('horario_Llegada'),
             'ruta_id' => request('ruta_id'),
              ]);  
             return redirect()->route('administracionViajes.show',$id)->with('status', __('Viaje modificado exitosamente'));

            }
            catch  (QueryException $e){
              return redirect()->route('administracionViajes.show',$id)->with('status', __('No se puede modificar un viaje asignado a una Ruta'));   
            }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viaje=Viaje::findOrFail($id);
             
        try {
                Viaje::destroy($id);
                return redirect()->route('administracionViajes.index')->with('status', __('Viaje eliminado satisfactoriamente.'));
             } catch (QueryException $e) {
                  return redirect()->route('administracionViajes.show', $id)->with('status', __('El viaje no puede ser elimindo'));
            }
    
    }
}
