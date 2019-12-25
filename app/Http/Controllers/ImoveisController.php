<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Imovel;
use Illuminate\Http\Request;

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

        $imovelEndereco = EnderecoController::cadastrar($request);

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

        $imovel = Imovel::find($id) ?? abort('404');

        $imovelEndereco = EnderecoController::editar($request);
        if (!$imovelEndereco) return 'Falha ao editar endereço';

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
