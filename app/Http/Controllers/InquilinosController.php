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

        $request['endereco_id'] = $inquilinoEndereco;

        if (Inquilino::create($request->all())) {
            return redirect()->to(route('inquilinoListar'));
        }

        return 'Falha ao cadastrar o inquilino';
    }


    public function formularioEditar($id)
    {
        $inquilino = Inquilino::findOrFail($id);
        $inquilinoEndereco = Endereco::findOrFail($inquilino->endereco_id);

        return view('inquilinos.formularioEditar')
            ->with('inquilino', $inquilino)
            ->with('inquilinoEndereco', $inquilinoEndereco);
    }

    public function editar(Request $request, $id)
    {
        $inquilino = Inquilino::findOrFail($id);

        $inquilinoEndereco = EnderecoController::editar($request);
        if (!$inquilinoEndereco) return 'Falha ao editar endereço';

        $inquilino->fill($request->all());

        if ($inquilino->save()) {
            return redirect()->to(route('inquilinoListar'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o inquilino';
    }


    public function remover($id)
    {
        $inquilino = Inquilino::findOrFail($id);
        $inquilino->delete();
        return redirect()->to(route('inquilinoListar'));
    }
}
