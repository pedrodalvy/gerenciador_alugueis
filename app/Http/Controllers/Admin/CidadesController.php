<?php

namespace App\Http\Controllers\Admin;

use App\Cidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    public function cidades(Request $request)
    {
        $cidade = $request->get('cidade');

        if (!empty($cidade)) {
            return Cidade::take(15)->where('nome', 'LIKE', "%{$cidade}%")->get();
        }

        return [['id' => 5002704, 'nome' => "Campo Grande", "uf" => "MS"]];
    }
}
