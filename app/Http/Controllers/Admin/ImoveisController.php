<?php

namespace App\Http\Controllers\Admin;

use App\Cidade;
use App\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnderecoController;
use App\Imovel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ImoveisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $imoveis = Imovel::paginate(5);

        return view('admin.imoveis.index')
            ->with('imoveis', $imoveis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.imoveis.create')
            ->with('imovel', new Imovel())
            ->with('imovelEndereco', new Endereco());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate(Imovel::RULES);

        $imovelEndereco = EnderecoController::cadastrar($request);
        if (!$imovelEndereco) return 'Falha ao cadastrar endereço';

        $request['endereco_id'] = $imovelEndereco;

        if (Imovel::create($request->all())) {
            return redirect()->to(route('imovel.index'));
        }

        EnderecoController::remover($imovelEndereco);
        return 'Falha ao cadastrar o imóvel';
    }

    /**
     * Display the specified resource.
     *
     * @param Imovel $imovel
     * @return Factory|View
     */
    public function show(Imovel $imovel)
    {
        $imovelEndereco = Endereco::findOrFail($imovel->endereco_id);
        $cidade = Cidade::findOrFail($imovelEndereco->municipio_id);
        $imovelEndereco['municipio'] = $cidade->nome . ', ' . $cidade->uf;

        return view('admin.imoveis.show')
            ->with('imovel', $imovel)
            ->with('imovelEndereco', $imovelEndereco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Imovel $imovel
     * @return Factory|View
     */
    public function edit(Imovel $imovel)
    {
        $imovelEndereco = Endereco::findOrFail($imovel->endereco_id);

        $imovel = (array_merge($imovel->toArray(), $imovelEndereco->toArray()));

        return view('admin.imoveis.edit')
            ->with('imovel', $imovel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Imovel $imovel
     * @return RedirectResponse
     */
    public function update(Request $request, Imovel $imovel)
    {
        $request->validate(Imovel::RULES);

        $imovelEndereco = EnderecoController::editar($request);
        if (!$imovelEndereco) return 'Falha ao editar endereço';

        $imovel->fill($request->all());

        if ($imovel->save()) {
            return redirect()->to(route('imovel.index'));
        }

        // TODO implemetar rollback de endereço
        return 'Falha ao editar o cadastro';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Imovel $imovel
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Imovel $imovel)
    {
        $imovel->delete();
        return redirect()->to(route('imovel.index'));
    }
}
