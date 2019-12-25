<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Imovel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ImoveisController extends Controller
{
    public function lista()
    {
        $imoveis = Imovel::all();

        return view('imoveis.lista', compact('imoveis'));
    }


    public function formularioCadastrar()
    {
        return view('imoveis.formularioCadastrar');
    }

    public function cadastrar(Request $request)
    {
        $imovelEndereco = null;

        if ($request->cep) {
            $endereco = [
                'cep' => $request->get('cep'),
                'logradouro' => $request->get('logradouro'),
                'numero' => $request->get('numero'),
                'complemento' => $request->get('complemento'),
                'bairro' => $request->get('bairro'),
                'municipio_id' => $request->get('municipio_id')
            ];

            $imovelEndereco = EnderecoController::cadastrar($endereco);
        }

        if (!$imovelEndereco) return 'Falha ao cadastrar endereço';

        $imovel = new Imovel();

        $imovel->descricao = $request->get('descricao');
        $imovel->inscricao_imobiliaria = $request->get('inscricao_imobiliaria');
        $imovel->valor_venda = $request->get('valor_venda');
        $imovel->valor_aluguel = $request->get('valor_aluguel');
        $imovel->endereco_id = $imovelEndereco;
        $imovel->save();

        if ($imovel->id) {
            return redirect()->to(route('imovelListar'));
        }

        return 'Falha ao cadastrar o imóvel';
    }


    public function formularioEditar($id)
    {
        $imovel = Imovel::find($id) ?? abort('404');
        $imovelEndereco = Endereco::find($imovel->endereco_id) ?? abort('404');

        return view('imoveis.formularioEditar')
            ->with('imovel', $imovel)
            ->with('imovelEndereco', $imovelEndereco);
    }

    public function editar(Request $request, $id)
    {
        $imovelEndereco = [
            'id' => $request->get('endereco_id'),
            'cep' => $request->get('cep'),
            'logradouro' => $request->get('logradouro'),
            'numero' => $request->get('numero'),
            'complemento' => $request->get('complemento'),
            'bairro' => $request->get('bairro'),
            'municipio_id' => $request->get('municipio_id')
        ];

        $imovelEndereco = EnderecoController::editar($imovelEndereco);

        if (!$imovelEndereco) return 'Falha ao editar endereço';

        $imovel = Imovel::find($id) ?? abort('404');

        $imovel->descricao = $request->get('descricao');
        $imovel->inscricao_imobiliaria = $request->get('inscricao_imobiliaria');
        $imovel->valor_venda = $request->get('valor_venda');
        $imovel->valor_aluguel = $request->get('valor_aluguel');

        if ($imovel->save()) {
            return redirect()->to(route('imovelListar'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o cadastro';
    }


    public function remover($id)
    {
        $imovel = Imovel::find($id) ?? abort('404');
        $imovel->delete();
        return redirect()->to(route('imovelListar'));
    }
}
