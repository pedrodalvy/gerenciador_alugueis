<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietariosController extends Controller
{
    public function lista()
    {
        return 'Implementar lista com todos os proprietarios';
    }


    public function formularioCadastrar()
    {
        return 'Implementar formulario para cadastro de proprietarios';
    }

    public function cadastrar()
    {
        return 'Implementar cadastro de proprietarios no banco de dados';
    }


    public function formularioEditar()
    {
        return 'Implementar formulário para editar proprietarios';
    }

    public function editar($id)
    {
        return 'Implementar alteração do cadastro de proprietarios';
    }


    public function remover($id)
    {
        return 'Implementar softdelete de proprietarios no banco de dados';
    }
}
