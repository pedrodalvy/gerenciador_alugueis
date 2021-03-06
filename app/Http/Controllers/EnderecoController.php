<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    static function cadastrar(Request $request)
    {
        $request->validate(Endereco::RULES);

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

    static function editar(Request $request)
    {
        $request->validate(Endereco::RULES + [
                'endereco_id' => 'required|numeric'
            ]);

        $endereco = Endereco::findOrFail($request->endereco_id);

        $endereco->cep = $request->get('cep');
        $endereco->logradouro = $request->get('logradouro');
        $endereco->numero = $request->get('numero');
        $endereco->complemento = $request->get('complemento');
        $endereco->bairro = $request->get('bairro');
        $endereco->municipio_id = $request->get('municipio_id');
        $endereco->save();

        return true;
    }

    static function remover($id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();
    }
}
