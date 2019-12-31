<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imovel extends Model
{
    use SoftDeletes;
    protected $table = 'imoveis';

    protected $fillable = [
        'descricao',
        'inscricao_imobiliaria',
        'valor_venda',
        'valor_aluguel',
        'endereco_id'
    ];
}
