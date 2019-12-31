@extends('layouts.admin')
@section('title', 'Novo Cadastro')

@section('content')
    <h3>Cadastrar Imóvel</h3>

    <form action="{{ route('imovel.store') }}" method="post">

        @include('admin.imoveis._form')

        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
    </form>
@endsection