<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proprietario extends Model
{
    use SoftDeletes;

    protected $table = 'proprietarios';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'telefone',
        'telefone_adicional',
        'telefone_contato',
        'telefone_contato_adicional',
        'agencia',
        'conta',
        'operacao',
        'endereco_id'
    ];

    const RULES = [
        'nome' => 'required|max:255',
        'cpf' => 'required|cpf',
        'email' => 'required|email',
        'telefone' => 'required|max:20',
        'telefone_adicional' => 'required|max:20',
        'telefone_contato' => 'required|max:20',
        'telefone_contato_adicional' => 'required|max:20',
        'agencia' => 'nullable',
        'conta' => 'nullable',
        'operacao' => 'nullable'
    ];
}
