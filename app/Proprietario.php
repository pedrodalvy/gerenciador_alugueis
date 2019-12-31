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
}
