@extends('layouts.admin')
@section('title', 'Lista de Inquilinos')

@section('content')

    <h3>Lista de inquilinos</h3>
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
        @forelse($inquilinos as $inquilino)
            <tr>
                <td>{{ $inquilino->id }}</td>
                <td>{{ $inquilino->nome }}</td>
                <td>{{ $inquilino->cpf }}</td>
                <td>{{ $inquilino->email }}</td>
                <td>{{ $inquilino->telefone }}</td>
                <td>
                    <a href="{{ route('inquilinos.edit', $inquilino->id) }}">Editar</a> |
                    <a href="{{ route('inquilinos.show', $inquilino->id) }}">Detalhes</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Nenhum inquilino cadastrado</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $inquilinos->links() }}
    <br><br>

    <a class="btn btn-outline-secondary" href="{{ route('inquilinos.create') }}">Novo Inquilino</a>
@endsection