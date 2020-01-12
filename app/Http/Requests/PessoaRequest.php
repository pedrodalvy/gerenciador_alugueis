<?php

namespace App\Http\Requests;

use App\Models\Pessoa;
use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
        $estadoCivil = implode(',', array_keys(Pessoa::ESTADO_CIVIL));
        $endereco = (new EnderecoRequest())->rules();
        return array_merge([
            'nome' => 'required|max:255',
            'email' => 'nullable|email',
            'data_nasc' => 'nullable|date',
            'cpf' => 'required|cpf',
            'rg' => 'required|integer',
            'orgao_rg' => 'required|max:50',
            'estado_civil' => "required|in:$estadoCivil",
            'sexo' => 'required|in:m,f',
            'telefone' => 'nullable|max:20',
            'telefone_sec' => 'nullable|max:20',
            'endereco_id' => 'nullable|integer',
        ], $endereco);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        $endereco = (new EnderecoRequest())->messages();
        return array_merge([],$endereco);
    }
}
