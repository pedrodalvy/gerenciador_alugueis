<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Endereco
 *
 * @property int $id
 * @property string $logradouro
 * @property string $numero
 * @property string $bairro
 * @property string|null $complemento
 * @property string $cep
 * @property int $municipio_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereBairro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereCep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereComplemento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereLogradouro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereMunicipioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Endereco whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Cidade $cidade
 */
class Endereco extends Model
{
    protected $table = 'enderecos';

    const RULES = [
        'cep' => 'required|numeric',
        'logradouro' => 'required|max:255',
        'numero' => 'required|max:20',
        'complemento' => 'max:255',
        'bairro' => 'required|max:255',
        'municipio_id' => 'required|numeric'
    ];

    /**
     * @return HasOne
     */
    public function cidade() {
        return $this->hasOne(Cidade::class, 'id', 'municipio_id');
    }
}
