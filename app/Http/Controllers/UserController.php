<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\saveUserRequest;

class UserController extends Controller
{
    public function edit($id){
         return view('User.editar', ['usuario' => User::findOrFail($id)]);
    }

    public function update(saveUserRequest $validacion, $id){
        $usuario = User::findOrFail($id);
        $usuario->update($validacion->validated());

        return redirect()->route('home')->with('status', __('Informacion actualizado correctamente.'));
    }

    public function show($id){
        return view('User.show', ['usuario' => User::findOrFail($id)]);
    }

    public function mejoraCuenta($id){
        return view('User.Premium', ['id' => $id]);
    }

    public function cambiarSubscripcion($id){
        echo $id;
        $usuario = User::findOrFail($id);
        $usuario->update(['gold'=>"1"]);
        return redirect()->route('home')->with('status', __('Su subscripcion se a modificado correctamente.'));
    }
}
