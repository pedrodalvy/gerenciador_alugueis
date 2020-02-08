<?php

namespace App\Models;

use App\Endereco;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pessoa
 *
 * @property int $id
 * @property string $nome Nome completo, obrigatório
 * @property string|null $email E-mail, único e opcional
 * @property string|null $data_nasc Data de nascimento, opcional
 * @property string $estado_civil Estado Civil, obrigatório
 * @property string|null $sexo
 * @property string $cpf CPF, único e obrigatório
 * @property int $rg RG, único e obrigatório
 * @property string $orgao_rg Órgão emissor do RG, obrigatório
 * @property string|null $telefone Telefone sem máscara, opcional
 * @property string|null $telefone_sec Telefone para contato sem máscara, opcional
 * @property int|null $endereco_id Relacionamento com tabela de endereços, opcional
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Endereco|null $endereco
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereDataNasc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereEnderecoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereEstadoCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereOrgaoRg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereRg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereSexo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereTelefoneSec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pessoa whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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