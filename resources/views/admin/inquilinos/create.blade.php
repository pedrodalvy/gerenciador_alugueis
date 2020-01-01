@extends('layouts.admin')
@section('title', 'Novo Cadastro')

@section('content')
    <h3>Cadastrar inquilino</h3>
    <br>

    <form action="{{ route('inquilinos.store') }}" method="post">

        @include('admin.inquilinos._form')

        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
    </form>
@endsection