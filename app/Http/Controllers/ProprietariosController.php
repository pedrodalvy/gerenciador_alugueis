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

        $proprietario = new Proprietario();

        $proprietario->nome = $request->get('nome');
        $proprietario->cpf = $request->get('cpf');
        $proprietario->email = $request->get('email');
        $proprietario->telefone = $request->get('telefone');
        $proprietario->telefone_adicional = $request->get('telefone_adicional');
        $proprietario->telefone_contato = $request->get('telefone_contato');
        $proprietario->telefone_contato_adicional = $request->get('telefone_contato_adicional');
        $proprietario->agencia = $request->get('agencia');
        $proprietario->conta = $request->get('conta');
        $proprietario->operacao = $request->get('operacao');
        $proprietario->endereco_id = $proprietarioEndereco;
        $proprietario->save();

        if ($proprietario->id) {
            return redirect()->to(route('proprietariosListar'));
        }

        return 'Falha ao cadastrar o proprietario';
    }


    public function formularioEditar($id)
    {
        $proprietario = Proprietario::find($id) ?? abort('404');
        $proprietarioEndereco = Endereco::find($proprietario->endereco_id) ?? abort('404');

        return view('proprietarios.formularioEditar')
            ->with('proprietario', $proprietario)
            ->with('proprietarioEndereco', $proprietarioEndereco);
    }

    public function editar(Request $request, $id)
    {
        $proprietario = Proprietario::find($id) ?? abort('404');

        $proprietarioEndereco = EnderecoController::editar($request);
        if (!$proprietarioEndereco) return 'Falha ao cadastrar endereço';

        $proprietario->nome = $request->get('nome');
        $proprietario->cpf = $request->get('cpf');
        $proprietario->email = $request->get('email');
        $proprietario->telefone = $request->get('telefone');
        $proprietario->telefone_adicional = $request->get('telefone_adicional');
        $proprietario->telefone_contato = $request->get('telefone_contato');
        $proprietario->telefone_contato_adicional = $request->get('telefone_contato_adicional');
        $proprietario->agencia = $request->get('agencia');
        $proprietario->conta = $request->get('conta');
        $proprietario->operacao = $request->get('operacao');

        if ($proprietario->save()) {
            return redirect()->to(route('proprietariosListar'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o proprietario';
    }


    public function remover($id)
    {
        $proprietario = Proprietario::find($id) ?? abort('404');
        $proprietario->delete();
        return redirect()->to(route('proprietariosListar'));
    }
}
