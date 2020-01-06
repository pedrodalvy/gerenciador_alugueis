<?php

namespace App\Http\Controllers\Admin;

use App\Cidade;
use App\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnderecoController;
use App\Proprietario;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProprietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $proprietarios = Proprietario::paginate();

        return view('admin.proprietarios.index')
            ->with('proprietarios', $proprietarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.proprietarios.create')
            ->with('proprietario', new Proprietario())
            ->with('proprietarioEndereco', new Endereco());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate(Proprietario::RULES);

        $proprietarioEndereco = EnderecoController::cadastrar($request);
        if (!$proprietarioEndereco) return 'Falha ao cadastrar endereço';

        $request['endereco_id'] = $proprietarioEndereco;

        if (Proprietario::create($request->all())) {
            return redirect()->to(route('proprietarios.index'));
        }

        EnderecoController::remover($proprietarioEndereco);
        return 'Falha ao cadastrar o proprietario';
    }

    /**
     * Display the specified resource.
     *
     * @param Proprietario $proprietario
     * @return Factory|View
     */
    public function show(Proprietario $proprietario)
    {
        $proprietarioEndereco = Endereco::findOrFail($proprietario->endereco_id);
        $cidade = Cidade::findOrFail($proprietarioEndereco->municipio_id);
        $proprietarioEndereco['municipio'] = $cidade->nome . ', ' . $cidade->uf;

        return view('admin.proprietarios.show')
            ->with('proprietario', $proprietario)
            ->with('proprietarioEndereco', $proprietarioEndereco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Proprietario $proprietario
     * @return Factory|View
     */
    public function edit(Proprietario $proprietario)
    {
        $proprietarioEndereco = Endereco::findOrFail($proprietario->endereco_id);

        $proprietario = array_merge($proprietario->toArray(), $proprietarioEndereco->toArray());
        
        return view('admin.proprietarios.edit')
            ->with('proprietario', $proprietario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Proprietario $proprietario
     * @return RedirectResponse
     */
    public function update(Request $request, Proprietario $proprietario)
    {
        $request->validate(Proprietario::RULES);

        $proprietarioEndereco = EnderecoController::editar($request);
        if (!$proprietarioEndereco) return 'Falha ao cadastrar endereço';

        $proprietario->fill($request->all());

        if ($proprietario->save()) {
            return redirect()->to(route('proprietarios.index'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o proprietario';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Proprietario $proprietario
     * @return void
     * @throws \Exception
     */
    public function destroy(Proprietario $proprietario)
    {
        $proprietario->delete();
        return redirect()->to(route('proprietarios.index'));
    }
}
