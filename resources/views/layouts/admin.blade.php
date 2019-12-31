<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <title>@yield('title','Gerenciador de Aluguéis')</title>
</head>
<body style="width: 99%">

<div class="row">
    <div class="container">
        @yield('content')
    </div>
</div>

<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>