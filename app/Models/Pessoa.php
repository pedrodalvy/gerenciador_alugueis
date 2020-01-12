<?php

namespace App\Models;

use App\Endereco;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    protected $fillable = [
        'nome',
        'email',
        'data_nasc',
        'estado_civil',
        'sexo',
        'cpf',
        'rg',
        'orgao_rg',
        'telefone',
        'telefone_sec',
        'endereco_id'
    ];

    const ESTADO_CIVIL = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }

    /*
    public function imoveis()
    {
       return $this->belongsToMany(Imovel::class);
    }
    */
}