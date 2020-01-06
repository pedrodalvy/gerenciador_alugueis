@extends('layouts.admin')
@section('title', 'Lista de Proprietários')

@section('content')

    <h3>Lista de proprietários</h3>
    <br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($proprietarios as $proprietario)
            <tr>
                <td>{{ $proprietario->id }}</td>
                <td>{{ $proprietario->nome }}</td>
                <td>{{ $proprietario->cpf_formatted }}</td>
                <td>{{ $proprietario->email }}</td>
                <td>{{ $proprietario->telefone_formatted }}</td>
                <td>
                    <a href="{{ route('proprietarios.edit', $proprietario->id) }}">Editar</a> |
                    <a href="{{ route('proprietarios.show', $proprietario->id) }}">Detalhes</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Nenhum proprietário cadastrado</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $proprietarios->links() }}
    <br><br>

    <a class="btn btn-outline-secondary" href="{{ route('proprietarios.create') }}">Novo Proprietário</a>
@endsection