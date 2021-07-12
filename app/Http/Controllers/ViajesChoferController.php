<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Viaje;
use App\Models\User;
use App\Models\Pasaje;
use App\Models\InsumoComprado;
use App\Models\Insumo;


class ViajesChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $viajes = Viaje::get();
        return view ('Choferes.viajes', compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $pasajes = Pasaje::where('viaje_id', $request->viaje_id)
                          ->where('usuario_id', $request->usuario_id)->get();
        
        if ($pasajes->count() == 0)  //Si tiene no tiene pasaje que compre
        {
            $viaje = Viaje::find($request->input('viaje_id'));
            $asientos = $viaje->asientos_disponibles - 1;
            $viaje->update(['asientos_disponibles'=>$asientos]);
            $usuario = User::findOrFail($request->usuario_id);
            $usuario->update(['compro'=> 1]);
            Pasaje::create( [
                 'viaje_id'=> $request->viaje_id,
                 'usuario_id'=> $request->usuario_id,
                 'estado' => 'reservado',
        ]);
        }

     InsumoComprado::create([
                'viaje_id'=> $request->viaje_id,
                 'usuario_id'=> $request->usuario_id,
                 'insumo_id' => $request->insumo_id, ]);
     $insumos= Insumo::get();
     $total=$pasajes->count() +1; 
     return view('Pasajes.complementarios', ['viaje' => Viaje::find($request->viaje_id)], compact('insumos'));
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

        $viaje=Viaje::find($id);
        $pasajeros = Pasaje::where('viaje_id', $viaje->id)->get();

        return view ('Choferes.pasajeros',  compact('pasajeros'), ['viaje'=>Viaje::find($id) ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id) //Ausente
    {
       $pasaje= Pasaje::findOrFail($id);
       $viaje= Viaje::find($pasaje->viaje_id);
       $asientos = $viaje->asientos_disponibles + 1;
       $pasaje= Pasaje::where('id', $id)->update(['estado' => 'ausente']);
       $viaje= Viaje::where('id', $viaje->id)->update(['asientos_disponibles'=>$asientos]);
       $pasaje= Pasaje::findOrFail($id);
       $pasajeros = Pasaje::get();
       return view ('Choferes.pasajeros',  compact('pasajeros'), ['viaje'=>Viaje::find($pasaje->viaje_id)]);

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
