<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAspirante extends FormRequest
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
            'nombre' => 'required|alpha',
            'apellido' => 'required|alpha',
            'cedula' => 'required|digits_between:7,8',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required',
            'telefono_fijo' => 'digits:11',
            'telefono_movil' => 'required|digits:11',
            'email' => 'required|email',
            'curriculum' => 'required|mimes:pdf'
        ];
    }
}
