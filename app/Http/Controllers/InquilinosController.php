<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquilinosController extends Controller
{
    public function lista()
    {
        return 'Implementar lista com todos os inquilinos';
    }


    public function formularioCadastrar()
    {
        return 'Implementar formulario para cadastro de inquilinos';
    }

    public function cadastrar()
    {
        return 'Implementar cadastro no banco de dados';
    }


    public function formularioEditar()
    {
        return 'Implementar formulário para editar inquilinos';
    }

    public function editar($id)
    {
        return 'Implementar alteração do cadastro de inquilinos';
    }


    public function remover($id)
    {
        return 'Implementar softdelete no banco de dados';
    }
}
