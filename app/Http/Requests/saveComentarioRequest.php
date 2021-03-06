<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveComentarioRequest extends FormRequest
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
            'user_id' => 'required',
            'rating' =>'required|Int|max:5|min:1',
            'descripcion' => 'required|max:255|min:5',
        ];
    }
}
