<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Locacion;

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
        Locacion::create( $request -> validate ([
             'ciudad' => 'required|String',
             'provincia' => 'required|String',
             ]));
        return redirect()->route('administracionLocaciones');
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
        $locacion -> update( $request -> validate ([
             'ciudad' => 'required|String|'
             'provincia' => 'required|String',
             ]));

        return view('Locaciones.show',['locacion' => Locacion::findOrFail($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Locacion::destroy($id);
       return redirect()->route('administracionLocaciones');
    }
}
