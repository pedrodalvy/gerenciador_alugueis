<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imovel extends Model
{
    use SoftDeletes;
    const RULES = [
        'descricao' => 'required|max:255',
        'inscricao_imobiliaria' => 'required',
        'valor_venda' => 'required|numeric',
        'valor_aluguel' => 'required|numeric'
    ];
    
    protected $table = 'imoveis';
    protected $fillable = [
        'descricao',
        'inscricao_imobiliaria',
        'valor_venda',
        'valor_aluguel',
        'endereco_id'
    ];    

    public function getValorVendaFormattedAttribute()
    {
        return number_format($this->valor_venda,2,",",".");
    }

    public function getValorAluguelFormattedAttribute()
    {
        return number_format($this->valor_aluguel,2,",",".");
    }
}
