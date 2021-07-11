<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Viaje;
use App\Models\User;
use App\Models\Pasaje;

class PasajesController extends Controller
{
    private function viajesAsientosLibres(){
        return DB::table('viajes')->where('asientos_disponibles', '>', 0)->get();
    }
    
    public function index()
    {
        $viajes = $this->viajesAsientosLibres();
        $rutas = DB::table('rutas')->get();
        $lugares = DB::table('lugares')->get();
        return view('Pasajes.index',compact(['viajes', 'rutas', 'lugares']));
    }

    public function search(Request $request){
        $viajes = $this->viajesAsientosLibres();
        if($request->fecha){
            $viajes = $viajes->where('fecha', '=', $request->fecha);
        }
        $rutas = DB::table('rutas')->get();
        $lugares = DB::table('lugares')->get();
        if($request->ciudad){
            $idCiudad = DB::table('lugares')->where('ciudad', 'like', "%{$request->ciudad}%")->get()->pluck('id');
            $rutasConCiudad = DB::table('rutas')->where('origen', '=', $idCiudad)->orWhere('destino', '=', $idCiudad)->get();

            $idRutas = [];
            foreach ($rutasConCiudad as $ruta) {
                array_push($idRutas, $ruta->id);
            }
            $viajes = $viajes->whereIn('ruta_id', $idRutas);      
        }
        if($request->provincia){
            $idProvincia = DB::table('lugares')->where('provincia', 'like', "%{$request->provincia}%")->get()->pluck('id');
            $rutasConProvincia = DB::table('rutas')->where('origen', '=', $idProvincia)->orWhere('destino', '=', $idProvincia)->get();
            $idRutas = [];
            foreach ($rutasConProvincia as $ruta) {
                 array_push($idRutas, $ruta->id);
             } 
            $viajes = $viajes->whereIn('ruta_id', $idRutas);      
        }
        return view('Pasajes.index',compact(['viajes', 'rutas', 'lugares']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $viaje = Viaje::find($request->viaje_id);
        return view('Pasajes.create',['viaje' => Viaje::find($request->viaje_id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'viaje_id' => 'required',
            'usuario_id' => 'required',
        ]);
        
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
        return redirect()->route('Pasajes')->with('status', __('Pasaje reservado Satisfactoriamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('Pasajes.show',['viaje' => Viaje::findOrFail($id)]);
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

    public function pasajesUsuario($id){
        $pasajes = DB::table('pasajes')->where('usuario_id', '=', $id)->get()
        return view('Pasajes.Viajes', )
    }

}
