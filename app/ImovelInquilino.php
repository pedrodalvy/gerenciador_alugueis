<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ImovelInquilino
 *
 * @property int $id
 * @property int $imovel_id
 * @property int $inquilino_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino whereImovelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino whereInquilinoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelInquilino whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ImovelInquilino extends Model
{
    protected $table = 'imoveis_inquilinos';
}
