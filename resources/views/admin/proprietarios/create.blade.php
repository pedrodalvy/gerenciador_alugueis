@extends('layouts.admin')
@section('title', 'Novo Cadastro')

@section('content')
    <h3>Cadastrar proprietário</h3>
    <br>

    @include('_form_errors')

    <form action="{{ route('proprietarios.store') }}" method="post">

        @include('admin.proprietarios._form')

        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
    </form>
@endsection