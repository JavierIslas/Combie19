<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class altaChoferRequest extends FormRequest
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
            'last_name' => 'required',
            'name' => 'required',
            'email' => 'required|unique:choferes,email'.$this->id, //ERROR
            'password' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
            'extra' => 'required',
        ];
    }
}
