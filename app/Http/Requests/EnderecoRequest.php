<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoRequest extends FormRequest
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
            'cep' => 'required_if:usar_endereco,==,sim|numeric',
            'logradouro' => 'required_if:usar_endereco,==,sim|max:255',
            'numero' => 'required_if:usar_endereco,==,sim|max:20',
            'complemento' => 'max:255',
            'bairro' => 'required_if:usar_endereco,==,sim|max:255',
            'municipio_id' => 'required_if:usar_endereco,==,sim|numeric',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'cep.required_if' => 'O campo CPF é obrigatório',
            'logradouro.required_if' => 'O campo Logradouro é obrigatório',
            'numero.required_if' => 'O campo Número é obrigatório',
            'bairro.required_if' => 'O campo Bairro é obrigatório',
            'municipio_id.required_if' => 'O campo Município é obrigatório',
        ];
    }
}
