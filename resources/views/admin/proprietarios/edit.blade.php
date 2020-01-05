@extends('layouts.admin')
@section('title', 'Editar Cadastro')

@section('content')
    <h3>Editar proprietário</h3>

    @include('form._form_errors')

    <form action="{{ route('proprietarios.update', $proprietario->id) }}" method="post">
        {{ method_field('PUT') }}

        @include('admin.proprietarios._form')

        <a class="btn btn-outline-secondary" href="{{ route('proprietarios.index') }}">Voltar</a>
        <button type="submit" class="btn btn-outline-primary">Gravar</button>
    </form>
@endsection