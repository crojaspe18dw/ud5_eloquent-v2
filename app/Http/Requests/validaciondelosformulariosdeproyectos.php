<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validaciondelosformulariosdeproyectos extends FormRequest
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
            'nombre'=>'required',
            'titulo'=>'required',
            'fechainicio'=>'required',
            'fechafin'=>'required',
            'horaestimadas'=>'required',
        ];
    }
}
