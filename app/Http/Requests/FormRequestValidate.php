<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestValidate extends FormRequest
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
            'nombre' => ['required'],
            'apellido' => ['required'],
            'cedula' => ['required','unique:programador'],
            'correo' => ['required','unique:programador'],
            'lenguajes' => ['required'],
          
        ];
    }

    public function messages()
    {
        return [

            'nombre.required' => 'El nombre es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
            'cedula.required' => 'La cedula es obligatoria.',
            'correo.required' => 'El correo es obligatorio.',
            'lenguajes.required' => 'El lenguaje es obligatorio.',
            'correo.unique' => 'El correo ya existe',
            'cedula.unique' => 'La cédula ya existe',
        ];
    }
}
