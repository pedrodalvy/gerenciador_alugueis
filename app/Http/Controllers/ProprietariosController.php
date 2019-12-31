<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Proprietario;
use Illuminate\Http\Request;

class ProprietariosController extends Controller
{
    public function lista()
    {
        $proprietarios = Proprietario::all();

        return view('proprietarios.lista')->with('proprietarios', $proprietarios);
    }


    public function formularioCadastrar()
    {
        return view('proprietarios.formularioCadastrar');
    }

    public function cadastrar(Request $request)
    {
        $proprietarioEndereco = EnderecoController::cadastrar($request);
        if (!$proprietarioEndereco) return 'Falha ao cadastrar endereço';

        $request['endereco_id'] = $proprietarioEndereco;

        if (Proprietario::create($request->all())) {
            return redirect()->to(route('proprietariosListar'));
        }

        return 'Falha ao cadastrar o proprietario';
    }


    public function formularioEditar($id)
    {
        $proprietario = Proprietario::findOrFail($id);
        $proprietarioEndereco = Endereco::findOrFail($proprietario->endereco_id);

        return view('proprietarios.formularioEditar')
            ->with('proprietario', $proprietario)
            ->with('proprietarioEndereco', $proprietarioEndereco);
    }

    public function editar(Request $request, $id)
    {
        $proprietario = Proprietario::findOrFail($id);

        $proprietarioEndereco = EnderecoController::editar($request);
        if (!$proprietarioEndereco) return 'Falha ao cadastrar endereço';

        $proprietario->fill($request->all());

        if ($proprietario->save()) {
            return redirect()->to(route('proprietariosListar'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o proprietario';
    }


    public function remover($id)
    {
        $proprietario = Proprietario::findOrFail($id);
        $proprietario->delete();
        return redirect()->to(route('proprietariosListar'));
    }
}
