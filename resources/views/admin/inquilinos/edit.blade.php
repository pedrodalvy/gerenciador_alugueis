@extends('layouts.admin')
@section('title', 'Editar Cadastro')

@section('content')
    <h3>Editar inquilino</h3>

    @include('form._form_errors')

    <form action="{{ route('inquilinos.update', $inquilino->id) }}" method="post">
        {{ method_field('PUT') }}

        @include('admin.inquilinos._form')

        <a class="btn btn-outline-secondary" href="{{ route('inquilinos.index') }}">Voltar</a>
        <button type="submit" class="btn btn-outline-primary">Gravar</button>
    </form>
@endsection