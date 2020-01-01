<?php

namespace App\Http\Controllers\Admin;

use App\Cidade;
use App\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnderecoController;
use App\Inquilino;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class InquilinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $inquilinos = Inquilino::all();

        return view('admin.inquilinos.index')
            ->with('inquilinos', $inquilinos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.inquilinos.create')
            ->with('inquilino', new Inquilino())
            ->with('inquilinoEndereco', new Endereco());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $inquilinoEndereco = EnderecoController::cadastrar($request);
        if (!$inquilinoEndereco) return 'Falha ao cadastrar endereço';

        $request['endereco_id'] = $inquilinoEndereco;

        if (Inquilino::create($request->all())) {
            return redirect()->to(route('inquilinos.index'));
        }

        EnderecoController::remover($inquilinoEndereco);
        return 'Falha ao cadastrar o inquilino';
    }

    /**
     * Display the specified resource.
     *
     * @param Inquilino $inquilino
     * @return Factory|View
     */
    public function show(Inquilino $inquilino)
    {
        $inquilinoEndereco = Endereco::findOrFail($inquilino->endereco_id);
        $cidade = Cidade::findOrFail($inquilinoEndereco->municipio_id);
        $inquilinoEndereco['municipio'] = $cidade->nome . ', ' . $cidade->uf;

        return view('admin.inquilinos.show')
            ->with('inquilino', $inquilino)
            ->with('inquilinoEndereco', $inquilinoEndereco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Inquilino $inquilino
     * @return Factory|View
     */
    public function edit(Inquilino $inquilino)
    {
        $inquilinoEndereco = Endereco::findOrFail($inquilino->endereco_id);

        return view('admin.inquilinos.edit')
            ->with('inquilino', $inquilino)
            ->with('inquilinoEndereco', $inquilinoEndereco);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Inquilino $inquilino
     * @return void
     */
    public function update(Request $request, Inquilino $inquilino)
    {
        $inquilinoEndereco = EnderecoController::editar($request);
        if (!$inquilinoEndereco) return 'Falha ao editar endereço';

        $inquilino->fill($request->all());

        if ($inquilino->save()) {
            return redirect()->to(route('inquilinos.index'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o inquilino';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Inquilino $inquilino
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Inquilino $inquilino)
    {
        $inquilino->delete();
        return redirect()->to(route('inquilinos.index'));
    }
}
