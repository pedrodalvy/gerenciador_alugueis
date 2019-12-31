@extends('layouts.admin')
@section('title', 'Lista de Imóveis')

@section('content')
    <h3>Listagem de Imóveis</h3>
    <br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Descrição</th>
            <th>Endereço</th>
            <th>Inscrição imobiliária</th>
            <th>Valor para venda</th>
            <th>Valor para aluguel</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($imoveis as $imovel)
            <tr>
                <td>{{ $imovel->id }}</td>
                <td>{{ $imovel->descricao }}</td>
                <td>implemetar endereco</td>
                <td>{{ $imovel->inscricao_imobiliaria }}</td>
                <td>{{ $imovel->valor_venda }}</td>
                <td>{{ $imovel->valor_aluguel }}</td>
                <td>
                    <a href="{{ route('imovel.edit', $imovel->id) }}">Editar</a> |
                    <a href="{{ route('imovel.show', $imovel->id) }}">Ver</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Nenhum imóvel cadastrado</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <a class="btn btn-outline-secondary" href="{{ route('imovel.create') }}">Novo Imóvel</a>
@endsection