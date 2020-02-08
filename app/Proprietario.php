<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Proprietario
 *
 * @property int $id
 * @property string $nome
 * @property string|null $cpf
 * @property string|null $email
 * @property string|null $telefone
 * @property string|null $telefone_adicional
 * @property string|null $telefone_contato
 * @property string|null $telefone_contato_adicional
 * @property string|null $agencia
 * @property string|null $conta
 * @property int|null $operacao
 * @property int $endereco_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $cpf_formatted
 * @property-read mixed $telefone_formatted
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Proprietario onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereAgencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereConta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereEnderecoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereOperacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereTelefoneAdicional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereTelefoneContato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereTelefoneContatoAdicional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Proprietario whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Proprietario withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Proprietario withoutTrashed()
 * @mixin \Eloquent
 */
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
