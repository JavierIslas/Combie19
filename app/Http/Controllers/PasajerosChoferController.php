<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasaje;
use App\Models\Viaje;
use App\Models\InsumoComprado;
use Illuminate\Support\Facades\Hash;
use Auth;

class PasajerosChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $insumos= InsumoComprado::where('usuario_id', Auth::user()->id)
                                 ->get();

        return view('Pasajes.insumosComprados',compact('insumos'));
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
         $existe = Pasaje::where('estado', '=', 'en viaje' )->first();
            if ($existe === null) {
               foreach ($pasajeros as $pasajero) {
                  if ($pasajero->estado == "reservado")
                      $pasajero->update(['estado' => 'cancelado']);
         }
        return redirect()->route ('administracionViajesChofer.show', $viaje)->with('status',__('Se ha enviado un mail a cada pasajero notificando el imprevisto y devolviendo el dinero'));
         }
         else
            return redirect()->route ('administracionViajesChofer.show', $viaje)->with('status',__('No se puede cancelar el viaje ya que hay pasajeros en viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
         return view('Choferes.realizarControl',['pasaje' => Pasaje::find($id)]); 
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
        $total= $request->muscular + $request->olfato +$request->cabeza +$request->garganta;
        $pasaje= Pasaje::find($id);
        $usuarioID= $pasaje->usuario_id;
        $viaje= Viaje::find($pasaje->viaje_id);
        $asientos = $viaje->asientos_disponibles + 1;
        $request->validate([
             'fiebre'=> 'required|numeric',
         ]);
        if ($request->fiebre > 37 || $total > 1) {
             $pasaje= Pasaje::where('id', $id)->update(['estado' => 'cuarentena']);
             $usuario= User::where('id', $usuarioID )->update(['quarentine'=> 1]);
             $viaje= Viaje::where('id', $viaje->id)->update(['asientos_disponibles'=>$asientos]);
        } else {
            $pasaje= Pasaje::where('id', $id)->update(['estado' => 'en viaje']);
        }
        $pasajeros = Pasaje::get();
        $pasaje= Pasaje::findOrFail($id);
        return view ('Choferes.pasajeros',  compact('pasajeros'), ['viaje'=>Viaje::find($pasaje->viaje_id)]);
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
