@extends('layouts.admin')
@section('title', 'Detalhes do inquilino')

@section('content')
    <h3>Detalhes do inquilino</h3>
    <br>

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{ $inquilino->id }}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{ $inquilino->nome }}</td>
        </tr>
        <tr>
            <th scope="row">CPF</th>
            <td>{{ $inquilino->cpf }}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{ $inquilino->email }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone Principal</th>
            <td>{{ $inquilino->telefone }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone Adicional</th>
            <td>{{ $inquilino->telefone_adicional }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone para Contato</th>
            <td>{{ $inquilino->telefone_contato }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone para Contato adicional</th>
            <td>{{ $inquilino->telefone_contato_adicional }}</td>
        </tr>
        </tbody>
    </table>
    <br>

    <h4>Endereço</h4>
    <table class="table table-bordered">
        <tr>
            <th scope="row">Logradouro</th>
            <td>{{ $inquilinoEndereco->logradouro }}</td>
        </tr>
        <tr>
            <th scope="row">Número</th>
            <td>{{ $inquilinoEndereco->numero }}</td>
        </tr>
        <tr>
            <th scope="row">Complemento</th>
            <td>{{ $inquilinoEndereco->complemento }}</td>
        </tr>
        <tr>
            <th scope="row">Bairro</th>
            <td>{{ $inquilinoEndereco->bairro }}</td>
        </tr>
        <tr>
            <th scope="row">CEP</th>
            <td>{{ $inquilinoEndereco->cep }}</td>
        </tr>
        <tr>
            <th scope="row">Município</th>
            <td>{{ $inquilinoEndereco->municipio }}</td>
        </tr>
        </tbody>
    </table>

    <a class="btn btn-outline-secondary" href="{{ route('inquilinos.index') }}">Voltar</a>
    <a class="btn btn-outline-danger" href="{{ route('inquilinos.destroy', $inquilino->id) }}"
       onclick="event.preventDefault(); if(confirm('Deseja excluir este cadastro?')) {document.getElementById('form-delete').submit();}">Remover</a>

    <form method="post" id="form-delete" style="display: none"
          action="{{ route('inquilinos.destroy', $inquilino->id ) }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    </form>

@endsection