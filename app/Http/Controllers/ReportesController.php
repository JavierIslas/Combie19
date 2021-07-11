<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasaje;
use App\Models\Viaje;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Reportes.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = User::where('quarentine',1)->get();

        return view ('Reportes.sospechosos',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viaje=Viaje::find($id);
        $existe = Pasaje::where('viaje_id', $viaje->id)
                     ->where('estado', '=', 'reservado' )->first();
        $pasajeros = Pasaje::where('viaje_id', $viaje->id)->get();
            if ($existe === null) {
               foreach ($pasajeros as $pasajero) {
                  if ($pasajero->estado == "en viaje")
                      $pasajero->update(['estado' => 'finalizado']);
         }
        return redirect()->route ('administracionViajesChofer.show', $viaje)->with('status',__('Se ha finalizado el viaje con exito'));
         }
         else
            return redirect()->route ('administracionViajesChofer.show', $viaje)->with('status',__('No se puede finalizar el viaje ya que hay pasajeros que estan en el estado de reservado'));
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
