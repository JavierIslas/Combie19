<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ruta;

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
        return view('Rutas.create',['ruta' => new Ruta]);
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
             'origen' => 'required|Int',
             'destino' => 'required|Int',
             'combie_id' => 'required|Int',
             'duracion' => 'required|DateTime',
             'distancia' => 'required|Double',
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
        return view('Rutas.show',['ruta' => Ruta::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Rutas.edit',['ruta' => Ruta::findOrFail($id)]);
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
        $ruta -> update( $request -> validate ([
             'origen' => 'required|Int',
             'destino' => 'required|Int',
             'combie_id' => 'required|Int',
             'duracion' => 'date_format:H:i',
             'distancia' => 'required|Double',
             ]));

        return view('Rutas.show',['ruta' => Ruta::findOrFail($id)]);
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
