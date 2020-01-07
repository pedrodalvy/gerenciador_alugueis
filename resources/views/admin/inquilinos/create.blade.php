@extends('layouts.admin')
@section('title', 'Novo Cadastro')

@section('content')
    <h3>Cadastrar inquilino</h3>
    <br>

    @include('form._form_errors')

    {!! Form::open(['route' => 'inquilinos.store', 'method' => 'POST']) !!}

        @include('admin.inquilinos._form')

        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
        
    {!! Form::close() !!}
@endsection