<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chofer;

use App\Http\Requests\altaChoferRequest;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $portfolio = Chofer::get();

        return view('Choferes.index', compact('portfolio'));
    }

    public function show($id){
        return view('Choferes.verChofer', ['chofer' => Chofer::findOrFail($id)]);
    }

    public function create(){
        return view('Choferes.create', ['chofer' => new Chofer]);   
    }

    public function store(altaChoferRequest $validacion){
        Chofer::create($validacion->validated());
        return redirect()->route('Choferes')->with('status', __('Chofer dado de alta satifactoriamente.'));       
    }

    public function edit($id){
         return view('Choferes.editar', ['chofer' => Chofer::findOrFail($id)]);
    }

    public function update(altaChoferRequest $validacion, $id){
        $conductor = Chofer::findOrFail($id);
        $conductor->update($validacion->validated());

        return redirect()->route('Choferes.show', $id)->with('status', __('Chofer actualizado correctamente.'));
    }

    public function destroy($id){
       Chofer::destroy($id);
       return redirect()->route('Choferes')->with('status', __('Chofer eliminado correctamente.'));
    }

   }