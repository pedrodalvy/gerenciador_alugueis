<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <title>@yield('title','Gerenciador de Aluguéis')</title>

</head>
<body>

<div class="row">

    <div class="sidenav col-md-2">
        <a href="{{ route('imovel.index') }}">Imóveis</a>
        <a href="{{ route('proprietarios.index') }}">Proprietários</a>
        <a href="{{ route('inquilinos.index') }}">Inquilinos</a>
    </div>

    <div class="container col-md-10" >
        @yield('content')
    </div>
</div>

<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>