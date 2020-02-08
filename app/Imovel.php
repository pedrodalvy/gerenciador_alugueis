<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Imovel
 *
 * @property int $id
 * @property string $descricao
 * @property int $endereco_id
 * @property string|null $inscricao_imobiliaria
 * @property int|null $valor_venda
 * @property int|null $valor_aluguel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $valor_aluguel_formatted
 * @property-read mixed $valor_venda_formatted
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Imovel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereEnderecoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereInscricaoImobiliaria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereValorAluguel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereValorVenda($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Imovel withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Imovel withoutTrashed()
 * @mixin \Eloquent
 */
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
