@extends('layouts.admin')
@section('title', 'Editar Cadastro')

@section('content')
    <h3>Editar inquilino</h3>

    @include('form._form_errors')

    {!! Form::model($inquilino, ['route' => ['inquilinos.update', $inquilino['id'], 'method' => 'PUT']]) !!}

        @include('admin.inquilinos._form')

        <a class="btn btn-outline-secondary" href="{{ route('inquilinos.index') }}">Voltar</a>
        <button type="submit" class="btn btn-outline-primary">Gravar</button>
    
    {!! Form::close() !!}
@endsection