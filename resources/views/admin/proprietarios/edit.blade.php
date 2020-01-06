@extends('layouts.admin')
@section('title', 'Editar Cadastro')

@section('content')
    <h3>Editar proprietário</h3>

    @include('form._form_errors')

    {!! Form::model($proprietario, ['route' => ['proprietarios.update', $proprietario['id']], 'method' => 'PUT']) !!}

        @include('admin.proprietarios._form')

        <a class="btn btn-outline-secondary" href="{{ route('proprietarios.index') }}">Voltar</a>
        <button type="submit" class="btn btn-outline-primary">Gravar</button>
        
   {!! Form::close() !!}
@endsection