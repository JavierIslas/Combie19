<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Viaje;
use App\Models\User;
use App\Models\Pasaje;

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
    public function create()
    {
<<<<<<< HEAD
       //
=======
        //
>>>>>>> 98af882fdb292ac0864eea7d3bc72551cd5df8a5
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
<<<<<<< HEAD
        $pasajeros = Pasaje::where('viaje_id', $viaje->id)->get();
=======
         $pasajeros = Pasaje::where('viaje_id', $viaje->id)->get();
>>>>>>> 98af882fdb292ac0864eea7d3bc72551cd5df8a5

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
    public function destroy($id) //Ausente
    {
<<<<<<< HEAD
        //
=======
        //   
>>>>>>> 98af882fdb292ac0864eea7d3bc72551cd5df8a5
    }
}
