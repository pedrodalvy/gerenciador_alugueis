@extends('layouts.admin')
@section('title', 'Pessoas')

@section('content')

    <h3>Lista de pessoas</h3>
    <br>

    <table class="table table-striped table-pessoas">
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
        @forelse($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa->id }}</td>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->cpf }}</td>
                <td>{{ $pessoa->email }}</td>
                <td>{{ $pessoa->telefone }}</td>
                <td>
                    <a href="{{ route('pessoas.edit', $pessoa->id) }}">Editar</a> |
                    <a href="{{ route('pessoas.show', $pessoa->id) }}">Detalhes</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Nenhuma pessoa cadastrada</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{--    Paginação--}}
    {{ $pessoas->links() }}
    <br><br>

    <a class="btn btn-outline-secondary" href="{{ route('pessoas.create') }}">Novo cadastro</a>
@endsection