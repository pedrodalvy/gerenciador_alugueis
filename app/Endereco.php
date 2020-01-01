<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';

    const RULES = [
        'cep' => 'required|numeric',
        'logradouro' => 'required|max:255',
        'numero' => 'max:20',
        'complemento' => 'max:255',
        'bairro' => 'required|max:255',
        'municipio_id' => 'required|numeric'
    ];
}
