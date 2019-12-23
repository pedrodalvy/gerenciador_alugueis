<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    public function lista()
    {
        return 'Implementar lista com todos os imoveis';
    }


    public function formularioCadastrar()
    {
        return 'Implementar formulario para cadastro de imoveis';
    }

    public function cadastrar()
    {
        return 'Implementar cadastro de imovel no banco de dados';
    }


    public function formularioEditar()
    {
        return 'Implementar formulário para editar imoveis';
    }

    public function editar($id)
    {
        return 'Implementar alteração do cadastro de imoveis';
    }


    public function remover($id)
    {
        return 'Implementar softdelete de imoveis no banco de dados';
    }
}
