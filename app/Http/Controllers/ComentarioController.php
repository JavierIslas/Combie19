<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comentario;
use App\Http\Requests\SaveComentarioRequest;
use Illuminate\Support\Facades\Auth;

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
        return view('Comentarios.index', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comentario = Comentario::get();
        foreach ($comentario as $c) {
            if($c->user_id == Auth::id()){
               return redirect()->route('Comentario')->with('status', __('Error: Usted ya nos ha enviado un comentario')); 
            }
        }
        return view('Comentarios.create',compact('comentario'),['nuevo' => new Comentario]);
    }

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
        } catch (Throwable $e) {
            return redirect()->route('Comentario')->with('status', __('Error: Usted ya nos ha enviado un comentario'));
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
        //$usuarios = User::get();
        $comentario= Comentario::find($id);
        return view('Comentarios.show',['comentario' => Comentario::findOrFail($id)],['usuario' => User::find($comentario->user_id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Comentarios.editar',['comentario' => Comentario::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveComentarioRequest $request, $id)
    {
        $comentario = Comentario::find($id);
        if($comentario->user_id == Auth::id()){
            try {
                $comentario= Comentario::find($id);
                $comentario -> update($request -> validated());
                return redirect()->route('Comentario.show',$id)->with('status', __('Comentario actualizada.'));
            } catch (QueryException $e) {
                return redirect()->route('Comentario.edit',$id)->with('status', __('Error: Hubo un problema interno'));
            }
        } else{return redirect()->route('Comentario.show', $id)->with('status', __('Este comentario no le pertenece... ¿Cómo llego a este punto?'));}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = Comentario::find($id);
        if($comentario->user_id == Auth::id()){
           try {
                Comentario::destroy($id);
                return redirect()->route('Comentario')->with('status', __('Su Comentario a sido eliminado'));
            } catch(QueryException $ex){
                return redirect()->route('Comentarios.show', $id)->with('status', __('Por alguna razon no se pudo eliminar el comentario'));
            }
        }
        else {return redirect()->route('Comentario.show', $id)->with('status', __('Este comentario no le pertenece... ¿Cómo llego a este punto?'));}
    }
}
