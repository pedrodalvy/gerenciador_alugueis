<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    static function cadastrar(array $attributes = [])
    {
        if (!$attributes) return false;

        $endereco = new Endereco();

        $endereco->cep = $attributes['cep'];
        $endereco->logradouro = $attributes['logradouro'];
        $endereco->numero = $attributes['numero'];
        $endereco->complemento = $attributes['complemento'];
        $endereco->bairro = $attributes['bairro'];
        $endereco->municipio_id = $attributes['municipio_id'];
        $endereco->save();

        if ($endereco->id) {
            return $endereco->id;
        }

        return false;
    }

    static function editar(array $attributes = [])
    {
        if (!$attributes) return false;

        $endereco = Endereco::find($attributes['id']) ?? abort('404');

        $endereco->cep = $attributes['cep'];
        $endereco->logradouro = $attributes['logradouro'];
        $endereco->numero = $attributes['numero'];
        $endereco->complemento = $attributes['complemento'];
        $endereco->bairro = $attributes['bairro'];
        $endereco->municipio_id = $attributes['municipio_id'];
        $endereco->save();

        return true;
    }
}
