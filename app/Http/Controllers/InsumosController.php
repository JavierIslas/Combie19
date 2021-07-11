<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insumo;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = Insumo::get();
        return view('Insumos.index',compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Insumos.create',['insumo' => new Insumo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Insumo::create($request -> validate([
            'nombre'=>'required|string|unique:insumos,nombre',
            'precio'=>'required|Int',
            'tipo'=> 'required'
        ])); 

        return redirect()->route('administracionInsumos.index')->with('status',__('Insumo agregado con exito'));

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('Insumos.show',['insumo' => Insumo::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Insumos.edit',['insumo' => Insumo::findOrFail($id)]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $insumo = Insumo::find($id);
        try {
             $insumo -> update($request -> validate([
            'nombre'=>'required|string', Rule::unique('insumo')->ignore($insumo->nombre),
            'precio'=>'required|Int',
            'tipo'=> 'required'
        ]));

         return redirect()->route('administracionInsumos.show', $id)->with('status', __('Insumo actualizado exitosamente'));
        } catch (QueryException $e) {
         return redirect()->route('administracionInsumos.show', $id)->with('status', __('No se puede modificar el insumo dado que ya existe en la base de datos'));
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
        Insumo::destroy($id);
           return redirect()->route('administracionInsumos.index')->with('status', __('Insumo eliminado satisfactoriamente.'));
    }
}
