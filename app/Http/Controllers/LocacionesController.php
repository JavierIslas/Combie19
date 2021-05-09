<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Models\Locacion;


 try { 
     //Your code
    } catch(QueryException $ex){ 
      dd($ex->getMessage()); 
    }

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
            echo "ERROR: La ciudad ya fue ingresada a la base de datos";
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

        try { 
        $locacion= Locacion::find($id);
        $locacion -> update( $request -> validate ([
             'ciudad' => 'required|String',
             'provincia' => 'required|String'
             ]));

        return view('Locaciones.show',['locacion' => Locacion::findOrFail($id)]);
        } catch(QueryException $ex){ 
            dd($ex->getMessage()); 
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
        Locacion::destroy($id);
       return redirect()->route('administracionLocaciones');
    }
}
