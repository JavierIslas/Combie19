<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Models\Locacion;
use App\Models\Ruta;


class LocacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $locaciones = Locacion::get();
       return view('Locaciones.index',compact('locaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Locaciones.create',['locacion' => new Locacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
        Locacion::create( $request -> validate([
             'ciudad' => 'required|String',
             'provincia' => 'required|String',
             ]));
        return redirect()->route('administracionLocaciones');
        } catch(QueryException $ex){
           return redirect()->route('administracionLocaciones.create',$request)->with('status',__('ERROR: La ciudad ya se encuentra en la base de datos'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Locaciones.show',['locacion' => Locacion::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('Locaciones.edit',['locacion' => Locacion::findOrFail($id)]);
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
        
        $locacion= Locacion::find($id);
        $rutasOrigen = Ruta::where('origen',$locacion->id)->get();
        $rutasDestino = Ruta::where('destino',$locacion->id)->get();
        if ($rutasOrigen->isEmpty() && $rutasDestino->isEmpty() ) {
            try {
               
               $locacion -> update( $request -> validate ([
                    'ciudad' => 'required|String',
                    'provincia' => 'required|String'
                     ]));

                return redirect()->route('administracionLocaciones.show', $id)->with('status', __('Locacion actualizada exitosamente'));

        } catch(QueryException $ex){
        
                return redirect()->route('administracionLocaciones.edit',$id)->with('status',__('Error: Ya existe una ciudad para esa provincia en la base de datos'));
                   }
        } else {
            return redirect()->route('administracionLocaciones.edit',$id)->with('status',__('Error: No se puede modificar una locacion asignada a una ruta'));
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
       try {
           Locacion::destroy($id);
           return redirect()->route('administracionLocaciones')->with('status', __('Locación eliminada satisfactoriamente.'));
       } catch (QueryException $e) {
           return redirect()->route('administracionLocaciones.show', $id)->with('status', __('La locación no puede ser eliminada ya que esta asignada a una ruta.'));
       }
    }
}
