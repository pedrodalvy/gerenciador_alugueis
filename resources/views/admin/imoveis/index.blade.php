@extends('layouts.admin')
@section('title', 'Imóveis')

@section('content')
    <h3>Listagem de Imóveis</h3>
    <br>

    <table class="table table-striped table-imoveis">
        <thead>
        <tr>
            <th>#</th>
            <th>Descrição</th>
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
                <td title="{{ $imovel->descricao }}">{{ $imovel->descricao }}</td>
                <td>{{ $imovel->inscricao_imobiliaria }}</td>
                <td>R$ {{ $imovel->valor_venda_formatted }}</td>
                <td>R$ {{ $imovel->valor_aluguel_formatted }}</td>
                <td>
                    <a href="{{ route('imovel.edit', $imovel->id) }}">Editar</a> |
                    <a href="{{ route('imovel.show', $imovel->id) }}">Detalhes</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Nenhum imóvel cadastrado</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $imoveis->links() }}
    <br>
    <a class="btn btn-outline-primary" href="{{ route('imovel.create') }}">Novo Imóvel</a>
@endsection