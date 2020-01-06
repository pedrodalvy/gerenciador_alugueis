@extends('layouts.admin')
@section('title', 'Editar Cadastro')

@section('content')
    <h3>Editar Imóvel</h3>

    @include('form._form_errors')

    {!! Form::model($imovel, ['route' => ['imovel.update', $imovel['id']],'method' => 'PUT']) !!}

        @include('admin.imoveis._form')

        <a class="btn btn-outline-secondary" href="{{ route('imovel.index') }}">Voltar</a>
        <button type="submit" class="btn btn-outline-primary">Gravar</button>
    {!! Form::close() !!}
@endsection