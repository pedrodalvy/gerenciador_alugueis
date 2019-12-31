<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <title>@yield('title','Gerenciador de Aluguéis')</title>
    <style>
        html, body {
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
        }
    </style>
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