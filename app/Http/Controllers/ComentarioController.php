<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comentario;
use App\Http\Requests\SaveComentarioRequest;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::get();
       return view('Comentarios.index',compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        $choferes = Chofer::get();
        return view('Combis.create',compact('choferes'),['combi' => new Comentario]);
    }
*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveComentarioRequest $request)
    {
        try {
            Comentario::create($request->validated());
            return redirect()->route('Comentario')->with('status', __('Comentario enviado satisfactoriamente'));
        } catch (QueryException $e) {
            return redirect()->route('Comentario.create')->with('status', __('Error: Usted ya nos ha enviado un comentario'));
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
       // $choferes = Chofer::get();
        $combi= Combi::find($id);
        return view('Combis.show',['combi' => Combi::findOrFail($id)],['choferDeCombi' => Chofer::find($combi->chofer_id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $choferes = Chofer::get();
        return view('Combis.edit',['combi' => Combi::findOrFail($id)], compact('choferes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCombiRequest $request, $id)
    {
        try {
            $combi= Combi::find($id);
            $combi -> update($request -> validated());
            return redirect()->route('administracionCombis.show',$id)->with('status', __('Combi actualizada.'));
        } catch (QueryException $e) {
            return redirect()->route('administracionCombis.edit',$id)->with('status', __('Error: La patente ya se encuentra registrada en la base de datos'));
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

       try {
            Combi::destroy($id);
            return redirect()->route('administracionCombis')->with('status', __('Combi eliminada correctamente'));
       } catch(QueryException $ex){
            return redirect()->route('administracionCombis.show', $id)->with('status', __('No se puede eliminar la combi ya que esta asignada a una ruta'));
        }
    }
}
