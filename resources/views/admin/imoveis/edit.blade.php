@extends('layouts.admin')
@section('title', 'Editar Cadastro')

@section('content')
    <h3>Editar Imóvel</h3>

    <form action="{{ route('imovel.update', $imovel->id) }}" method="post">
        {{ method_field('PUT') }}

        @include('admin.imoveis._form')

        <a class="btn btn-outline-secondary" href="{{ route('imovel.index') }}">Voltar</a>
        <button type="submit" class="btn btn-outline-primary">Gravar</button>
    </form>
@endsection