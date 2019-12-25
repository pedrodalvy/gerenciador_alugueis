<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    static function cadastrar($request)
    {
        if (!$request->cep) return false;

        $endereco = new Endereco();

        $endereco->cep = $request->get('cep');
        $endereco->logradouro = $request->get('logradouro');
        $endereco->numero = $request->get('numero');
        $endereco->complemento = $request->get('complemento');
        $endereco->bairro = $request->get('bairro');
        $endereco->municipio_id = $request->get('municipio_id');
        $endereco->save();

        if ($endereco->id) {
            return $endereco->id;
        }

        return false;
    }

    static function editar($request)
    {
        if (!$request->cep) return false;

        $endereco = Endereco::find($request->endereco_id) ?? abort('404');

        $endereco->cep = $request->get('cep');
        $endereco->logradouro = $request->get('logradouro');
        $endereco->numero = $request->get('numero');
        $endereco->complemento = $request->get('complemento');
        $endereco->bairro = $request->get('bairro');
        $endereco->municipio_id = $request->get('municipio_id');
        $endereco->save();

        return true;
    }
}
