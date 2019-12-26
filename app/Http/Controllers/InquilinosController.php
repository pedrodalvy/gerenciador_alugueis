<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Inquilino;
use Illuminate\Http\Request;

class InquilinosController extends Controller
{
    public function lista()
    {
        $inquilinos = Inquilino::all();

        return view('inquilinos.lista')->with('inquilinos', $inquilinos);
    }


    public function formularioCadastrar()
    {
        return view('inquilinos.formularioCadastrar');
    }

    public function cadastrar(Request $request)
    {
        $inquilinoEndereco = EnderecoController::cadastrar($request);
        if (!$inquilinoEndereco) return 'Falha ao cadastrar endereço';

        $inquilino = new Inquilino();

        $inquilino->nome = $request->get('nome');
        $inquilino->cpf = $request->get('cpf');
        $inquilino->email = $request->get('email');
        $inquilino->telefone = $request->get('telefone');
        $inquilino->telefone_adicional = $request->get('telefone_adicional');
        $inquilino->telefone_contato = $request->get('telefone_contato');
        $inquilino->telefone_contato_adicional = $request->get('telefone_contato_adicional');
        $inquilino->endereco_id = $inquilinoEndereco;
        $inquilino->save();

        if ($inquilino->id) {
            return redirect()->to(route('inquilinoListar'));
        }

        return 'Falha ao cadastrar o inquilino';
    }


    public function formularioEditar($id)
    {
        $inquilino = Inquilino::find($id) ?? abort('404');
        $inquilinoEndereco = Endereco::find($inquilino->endereco_id) ?? abort('404');

        return view('inquilinos.formularioEditar')
            ->with('inquilino', $inquilino)
            ->with('inquilinoEndereco', $inquilinoEndereco);
    }

    public function editar(Request $request, $id)
    {
        $inquilino = Inquilino::find($id) ?? abort('404');

        $inquilinoEndereco = EnderecoController::editar($request);
        if (!$inquilinoEndereco) return 'Falha ao editar endereço';

        $inquilino->nome = $request->get('nome');
        $inquilino->cpf = $request->get('cpf');
        $inquilino->email = $request->get('email');
        $inquilino->telefone = $request->get('telefone');
        $inquilino->telefone_adicional = $request->get('telefone_adicional');
        $inquilino->telefone_contato = $request->get('telefone_contato');
        $inquilino->telefone_contato_adicional = $request->get('telefone_contato_adicional');


        if ($inquilino->save()) {
            return redirect()->to(route('inquilinoListar'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o inquilino';
    }


    public function remover($id)
    {
        $inquilino = Inquilino::find($id) ?? abort('404');
        $inquilino->delete();
        return redirect()->to(route('inquilinoListar'));
    }
}
