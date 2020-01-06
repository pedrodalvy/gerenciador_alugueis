@extends('layouts.admin')
@section('title', 'Novo Cadastro')

@section('content')
    <h3>Cadastrar proprietário</h3>
    <br>

    @include('form._form_errors')


    {{ Form::open(['route' => 'proprietarios.store', 'method' => 'POST']) }}

        @include('admin.proprietarios._form')

        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
    
    {{ Form::close() }}
@endsection