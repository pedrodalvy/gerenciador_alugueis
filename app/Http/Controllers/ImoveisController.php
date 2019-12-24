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


    public function formularioEditar()
    {
        return 'Implementar formulário para editar imoveis';
    }

    public function editar($id)
    {
        return 'Implementar alteração do cadastro de imoveis';
    }


    public function remover($id)
    {
        return 'Implementar softdelete de imoveis no banco de dados';
    }
}
