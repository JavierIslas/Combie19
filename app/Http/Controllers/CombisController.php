<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Combi;
use App\Models\Chofer;

use App\Http\Requests\SaveCombiRequest;

class CombisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combis = Combi::get();

       return view('Combis.index',compact('combis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
    {

        $choferes = Chofer::get();
        return view('Combis.create',compact('choferes'),[
               'combi' => new Combi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCombiRequest $request)
    {
        
        Combi::create($request->validated());
        return redirect()->route('administracionCombis');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $choferes = Chofer::get();
        $combi= Combi::find($id);
        return view('Combis.show',['combi' => Combi::findOrFail($id)], compact('choferes'));
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
        
        $combi= Combi::find($id);
        $combi -> update($request -> validated());
        return view('Combis.show',['combi' => Combi::findOrFail($combi->id)]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Combi::destroy($id);
       return redirect()->route('administracionCombis');
    }
}
