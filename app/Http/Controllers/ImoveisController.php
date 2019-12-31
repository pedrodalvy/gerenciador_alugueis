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

        return view('imoveis.lista')
            ->with('imoveis', $imoveis);
    }


    public function formularioCadastrar()
    {
        return view('imoveis.formularioCadastrar')
            ->with('imovel', new Imovel());
    }

    public function cadastrar(Request $request)
    {
        $imovelEndereco = EnderecoController::cadastrar($request);
        if (!$imovelEndereco) return 'Falha ao cadastrar endereço';

        $request['endereco_id'] = $imovelEndereco;

        if (Imovel::create($request->all())) {
            return redirect()->to(route('imovelListar'));
        }

        EnderecoController::remover($imovelEndereco);
        return 'Falha ao cadastrar o imóvel';
    }


    public function formularioEditar($id)
    {
        $imovel = Imovel::findOrFail($id);
        $imovelEndereco = Endereco::findOrFail($imovel->endereco_id);

        return view('imoveis.formularioEditar')
            ->with('imovel', $imovel)
            ->with('imovelEndereco', $imovelEndereco);
    }

    public function editar(Request $request, $id)
    {
        $imovel = Imovel::findOrFail($id);

        $imovelEndereco = EnderecoController::editar($request);
        if (!$imovelEndereco) return 'Falha ao editar endereço';

        $imovel->fill($request->all());

        if ($imovel->save()) {
            return redirect()->to(route('imovelListar'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o cadastro';
    }


    public function remover($id)
    {
        $imovel = Imovel::findOrFail($id);
        $imovel->delete();
        return redirect()->to(route('imovelListar'));
    }
}
