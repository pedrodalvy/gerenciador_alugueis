<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Cidade
 *
 * @property int $id Deve seguir o codigo IBGE do municipio
 * @property string $nome
 * @property string $uf
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereUf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cidade extends Model
{
    protected $table = 'cidades';
}
