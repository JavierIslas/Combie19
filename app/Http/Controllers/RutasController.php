<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ruta;
use App\Models\Locacion;
use App\Models\Combi;
use App\Models\Chofer;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutas = Ruta::get();
        return view('Rutas.index',compact('rutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lugares = Locacion::get();
        $combis = Combi::get();
        return view('Rutas.create',compact('lugares','combis'),['ruta' => new Ruta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ruta::create( $request -> validate ([
             'origen' => 'required|Int|different:destino',
             'destino' => 'required|Int|different:origen',
             'combie_id' => 'required|Int',
             'duracion' => 'required|date_format:H:i',
             'distancia' => 'required|numeric|Min:1|Max:10000',
             ]));
        return redirect()->route('administracionRutas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruta = Ruta::find($id);
        $combi = Combi::find($ruta->combie_id);
        return view('Rutas.show',['ruta' => Ruta::findOrFail($id)],['lugarOrigen' => Locacion::find($ruta->origen),'lugarDestino' => Locacion::find($ruta->destino),'combi' => Combi::find($ruta->combie_id),'choferDeCombi' => Chofer::find($combi->chofer_id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $lugares = Locacion::get();
        $combis = Combi::get();
        return view('Rutas.edit',compact('lugares','combis'),['ruta' => Ruta::findOrFail($id)]);
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
        $ruta= Ruta::find($id);
        $combi = Combi::find($ruta->combie_id);
        $ruta -> update( $request -> validate ([
             'origen' => 'required|Int|different:destino',
             'destino' => 'required|Int|different:origen',
             'combie_id' => 'required|Int',
             'duracion' => 'required|date_format:H:i:s',
             'distancia' => 'required|numeric|Min:1|Max:10000',
             ]));

        return view('Rutas.show',['ruta' => Ruta::findOrFail($id),'lugarOrigen' => Locacion::find($ruta->origen),'lugarDestino' => Locacion::find($ruta->destino),'combi' => Combi::find($ruta->combie_id),'choferDeCombi' => Chofer::find($combi->chofer_id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ruta::destroy($id);
        return redirect()->route('administracionRutas');
    }
}
