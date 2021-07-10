<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;

use App\Models\Combi;
use App\Models\Chofer;
use App\Models\Ruta;
use App\Models\Viaje;

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
        return view('Combis.create',compact('choferes'),['combi' => new Combi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCombiRequest $request)
    {
        try {
            Combi::create($request->validated());
            return redirect()->route('administracionCombis')->with('status', __('Combi dada de alta satisfactoriamente'));
        } catch (QueryException $e) {
            return redirect()->route('administracionCombis.create')->with('status', __('Error: La patente ya se encuentra registrada en la base de datos'));
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
       
       $combi= Combi::find($id);
       $rutas = Ruta::where('combie_id',$combi->id)->get();
       if ($rutas->isEmpty()) {
            try {
            $combi -> update($request -> validated());
            return redirect()->route('administracionCombis.show',$id)->with('status', __('Combi actualizada.'));
                } catch (QueryException $e) {
            return redirect()->route('administracionCombis.edit',$id)->with('status', __('Error: La patente ya se encuentra registrada en la base de datos'));
                }
        } else {
            return redirect()->route('administracionCombis.edit',$id)->with('status', __('Error: No se puede modificar una combi asignada a una ruta'));
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
