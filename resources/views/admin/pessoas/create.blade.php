@extends('layouts.admin')
@section('title', 'Novo Cadastro')

@section('content')
    <h3>Cadastrar pessoa</h3>
    <br>

    @include('form._form_errors')


    {{ Form::open(['route' => 'pessoas.store', 'method' => 'POST']) }}

        @include('admin.pessoas._form')

        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
    
    {{ Form::close() }}
@endsection