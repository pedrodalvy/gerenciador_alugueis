@extends('layouts.admin')
@section('title', 'Novo Cadastro')

@section('content')
    <h3>Cadastrar Imóvel</h3>

    @include('form._form_errors')

    {{ Form::open(['route' => 'imovel.store']) }}

        @include('admin.imoveis._form')

        <button type="submit" class="btn btn-outline-secondary">Salvar</button>

    {{ Form::close() }}

@endsection