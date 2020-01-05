<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
 */
	class Cidade extends \Eloquent {}
}

namespace App{
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
 */
	class Endereco extends \Eloquent {}
}

namespace App{
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
 */
	class Imovel extends \Eloquent {}
}

namespace App{
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
 */
	class ImovelInquilino extends \Eloquent {}
}

namespace App{
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
 */
	class ImovelProprietario extends \Eloquent {}
}

namespace App{
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
 */
	class Inquilino extends \Eloquent {}
}

namespace App{
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
 */
	class Proprietario extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

