<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;    

class saveUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //cambiar cuando haya cliente
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            "email" => "required|email|max:128|unique:users,email,".Auth::id().",id", //ERROR
            'password' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
        ];
    }
}