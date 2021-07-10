<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Chofer;
use App\Models\Combi;

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
        try{
            $goldchofer=2;
            User::create([
                'name' => $validacion->name." ".$validacion->last_name,
                'email' => $validacion->email,
                'password' => Hash::make($validacion->password),
                'phone' => $validacion->phone,
                'birthday' => $validacion->birthday,
                'gold'=> $goldchofer,
            ]);
        } catch(QueryException $ex){
            return redirect()->route('Choferes')->with('status', __('El mail pertenece a un usuario registrado.'));
        }
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
        try {
            $chofer= Chofer::find($id);
            Chofer::destroy($id);
            User::where('email', $chofer->email)->delete();
            return redirect()->route('Choferes')->with('status', __('Chofer eliminado correctamente.'));

        } catch(QueryException $ex){
            return redirect()->route('Choferes.show', $id)->with('status', __('No se  puede eliminar, Chofer asignado a una combi.'));
        }
    }
}