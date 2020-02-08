<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ImovelProprietario
 *
 * @property int $id
 * @property int $imovel_id
 * @property int $proprietario_id
 * @property int $responsavel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario whereImovelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario whereProprietarioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario whereResponsavel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImovelProprietario whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ImovelProprietario extends Model
{
    protected $table = 'imoveis_proprietarios';
}
