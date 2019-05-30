<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospedeFormRequest extends FormRequest
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
            'Nome_Hospede' => 'required',
            'Data_Nascimento' => 'required',
            'CPF' => 'required|unique:hospedes,CPF',    
            'RG' => 'required',
            'Endereco' => 'required',
            'Numero' => 'required', 
            'Bairro' => 'required',
            'Cidade' => 'required',
            'UF' => 'required',
            'CEP' => 'required', 
            'Celular' => 'required',
            'Email' => 'required|email',
        ];
    }
}
