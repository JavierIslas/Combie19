<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCombiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'model' => 'required|max:255',
        'patente' => 'required|max:8|min:6',
        'asientos' =>'required|Int|max:30|min:10',
        'chofer_id'=>'required',
        'tipo'=>'required',
        ];
    }
}
