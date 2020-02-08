<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Inquilino
 *
 * @property int $id
 * @property string $nome
 * @property string|null $cpf
 * @property string|null $email
 * @property string|null $telefone
 * @property string|null $telefone_adicional
 * @property string|null $telefone_contato
 * @property string|null $telefone_contato_adicional
 * @property int $endereco_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Inquilino onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereEnderecoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereTelefoneAdicional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereTelefoneContato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereTelefoneContatoAdicional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inquilino whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Inquilino withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Inquilino withoutTrashed()
 * @mixin \Eloquent
 */
class Inquilino extends Model
{
    use SoftDeletes;

    protected $table = 'inquilinos';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'telefone',
        'telefone_adicional',
        'telefone_contato',
        'telefone_contato_adicional',
        'endereco_id'
    ];

    const RULES = [
        'nome' => 'required|max:255',
        'cpf' => 'required|cpf',
        'email' => 'required|email',
        'telefone' => 'required|max:20',
        'telefone_adicional' => 'required|max:20',
        'telefone_contato' => 'required|max:20',
        'telefone_contato_adicional' => 'required|max:20'
    ];
}
