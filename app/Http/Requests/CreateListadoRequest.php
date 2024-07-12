<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateListadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'curso' => 'required',
            'nota_1' => 'required',
            'nota_2' => 'required'
        ];
    }

    public function messages(){
            return[
                'nombre.required'=>'Se necesita el Nombre para continuar',
                'curso.required'=>'Se necesita el Curso para continuar',
                'nota_1.required'=>'Se necesita la Nota 01 para continuar',
                'nota_2.required'=>'Se necesita la Nota 02 para continuar'
            ];
    }
}
