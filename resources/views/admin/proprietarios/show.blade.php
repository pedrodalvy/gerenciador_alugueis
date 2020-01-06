@extends('layouts.admin')
@section('title', 'Detalhes do proprietário')

@section('content')
    <h3>Detalhes do proprietário</h3>
    <br>

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{ $proprietario->id }}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{ $proprietario->nome }}</td>
        </tr>
        <tr>
            <th scope="row">CPF</th>
            <td>{{ $proprietario->cpf }}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{ $proprietario->email }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone Principal</th>
            <td>{{ $proprietario->telefone }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone Adicional</th>
            <td>{{ $proprietario->telefone_adicional }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone para Contato</th>
            <td>{{ $proprietario->telefone_contato }}</td>
        </tr>
        <tr>
            <th scope="row">Telefone para Contato adicional</th>
            <td>{{ $proprietario->telefone_contato_adicional }}</td>
        </tr>
        </tbody>
    </table>
    <br>

    <h4>Dados bancários</h4>
    <table class="table table-bordered">
        <tr>
            <th scope="row">Agencia</th>
            <td>{{ $proprietario->agencia }}</td>
        </tr>
        <tr>
            <th scope="row">Conta</th>
            <td>{{ $proprietario->conta }}</td>
        </tr>
        <tr>
            <th scope="row">Operação</th>
            <td>{{ $proprietario->operacao }}</td>
        </tr>
        </tbody>
    </table>
    <br>

    <h4>Endereço</h4>
    <table class="table table-bordered">
        <tr>
            <th scope="row">Logradouro</th>
            <td>{{ $proprietarioEndereco->logradouro }}</td>
        </tr>
        <tr>
            <th scope="row">Número</th>
            <td>{{ $proprietarioEndereco->numero }}</td>
        </tr>
        <tr>
            <th scope="row">Complemento</th>
            <td>{{ $proprietarioEndereco->complemento }}</td>
        </tr>
        <tr>
            <th scope="row">Bairro</th>
            <td>{{ $proprietarioEndereco->bairro }}</td>
        </tr>
        <tr>
            <th scope="row">CEP</th>
            <td>{{ $proprietarioEndereco->cep }}</td>
        </tr>
        <tr>
            <th scope="row">Município</th>
            <td>{{ $proprietarioEndereco->municipio }}</td>
        </tr>
        </tbody>
    </table>

    <a class="btn btn-outline-secondary" href="{{ route('proprietarios.index') }}">Voltar</a>
    <a class="btn btn-outline-danger" href="{{ route('proprietarios.destroy', $proprietario->id) }}"
       onclick="event.preventDefault(); if(confirm('Deseja excluir este cadastro?')) {document.getElementById('form-delete').submit();}">Remover</a>

    {!! Form::open(['route' => ['proprietarios.destroy', $proprietario->id], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}

@endsection