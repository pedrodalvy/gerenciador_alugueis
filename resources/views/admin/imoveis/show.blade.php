@extends('layouts.admin')
@section('title', 'Detalhes do imóvel')

@section('content')
    <h3>Detalhes do imóvel</h3>
    <br>

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{ $imovel->id }}</td>
        </tr>
        <tr>
            <th scope="row">Descrição</th>
            <td>{{ $imovel->descricao }}</td>
        </tr>
        <tr>
            <th scope="row">Inscrição Imobiliária</th>
            <td>{{ $imovel->inscricao_imobiliaria }}</td>
        </tr>
        <tr>
            <th scope="row">Valor de Venda</th>
            <td>R$ {{ $imovel->valor_venda_formatted }}</td>
        </tr>
        <tr>
            <th scope="row">Valor do aluguel</th>
            <td>R$ {{ $imovel->valor_aluguel_formatted }}</td>
        </tr>
        <tr>
            <th scope="row" colspan="2">Endereço</th>
        </tr>
        <tr>
            <th scope="row">Logradouro</th>
            <td>{{ $imovelEndereco->logradouro }}</td>
        </tr>
        <tr>
            <th scope="row">Número</th>
            <td>{{ $imovelEndereco->numero }}</td>
        </tr>
        <tr>
            <th scope="row">Complemento</th>
            <td>{{ $imovelEndereco->complemento }}</td>
        </tr>
        <tr>
            <th scope="row">Bairro</th>
            <td>{{ $imovelEndereco->bairro }}</td>
        </tr>
        <tr>
            <th scope="row">CEP</th>
            <td>{{ $imovelEndereco->cep }}</td>
        </tr>
        <tr>
            <th scope="row">Município</th>
            <td>{{ $imovelEndereco->municipio }}</td>
        </tr>
        </tbody>
    </table>

    <a class="btn btn-outline-secondary" href="{{ route('imovel.index') }}">Voltar</a>
    <a class="btn btn-outline-danger" href="{{ route('imovel.destroy', $imovel->id) }}"
       onclick="event.preventDefault(); if(confirm('Deseja excluir este cadastro?')) {document.getElementById('form-delete').submit();}">Remover</a>

    <form method="post" id="form-delete" style="display: none" action="{{ route('imovel.destroy', $imovel->id ) }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    </form>

@endsection