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

    public function getCpfFormattedAttribute(){
        $document = $this->cpf;
        if(!empty($document) and strlen($document) == 11){
                $document = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/','$1.$2.$3-$4',$document);
        }
        return $document;
    }

    public function getTelefoneFormattedAttribute(){
        $telefone = $this->telefone;
        if(!empty($telefone)){
            if (strlen($telefone) == 10) {
                $telefone = preg_replace('/(\d{2})(\d{4})(\d{4})/','($1) $2-$3',$telefone);
            } elseif (strlen($telefone) == 11) {
                $telefone = preg_replace('/(\d{2})(\d{1})(\d{4})(\d{4})/','($1) $2 $3-$4',$telefone);
            }
        }
        return $telefone;
    }
}
