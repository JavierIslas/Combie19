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
       // return Chofer::find($id); Muestra un Json
        return view('Choferes.verChofer', ['chofer' => Chofer::findOrFail($id)]);
    }

    public function create(){
        return view('Choferes.create');   
    }

    public function store(altaChoferRequest $validacion){
        
        Chofer::create($validacion->validated());

        return redirect()->route('Choferes');
    }
   }