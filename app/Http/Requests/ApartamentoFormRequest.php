<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartamentoFormRequest extends FormRequest
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
            'Codigo_Hotel' => 'required|numeric',
            'Numero_Apartamento' => 'required|numeric',    
            'Tipo_Apartamento' => 'required',
            'Tipo_Acomodacao' => 'required',
            'Quantidade_Cama' => 'required|numeric', 
            'Inicio_Hospedagem' => 'date',
            'Fim_Hospedagem' => 'date',
            'Valor_Diaria' => 'required',
            'Codigo_Hospede' => 'numeric',           
        ];
    }
}
