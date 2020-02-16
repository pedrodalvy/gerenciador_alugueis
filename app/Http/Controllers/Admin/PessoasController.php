<?php

namespace App\Http\Controllers\Admin;

use App\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * Class PessoasController
 * @package App\Http\Controllers\Admin
 */
class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $pessoas = Pessoa::paginate();

        return view('admin.pessoas.index')
            ->with('pessoas', $pessoas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.pessoas.create')
            ->with('pessoa', new Pessoa())
            ->with('endereco', new Endereco());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PessoaRequest $request
     * @return RedirectResponse
     */
    public function store(PessoaRequest $request)
    {
        $data = $request->only(array_keys($request->rules()));

        $data['cpf'] = preg_replace('/\D/', '',  $data['cpf'] );

        $pessoa = Pessoa::make($data);

        if($pessoa->usar_endereco == 'sim') {
            $pessoa->endereco->create($request);
        }
        $pessoa->save();

        return redirect()->route('pessoas.index')
            ->with('message', 'Pessoa cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
