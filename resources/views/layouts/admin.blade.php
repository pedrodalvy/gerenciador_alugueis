<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



</head>

<body class="grey lighten-3">

<!--Main Navigation-->
@include('layouts.header')
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="card-body">

                @yield('content')

            </div>
        </div>
    </div>
</main>
<!--Main layout-->

<!--Footer-->
@include('layouts.footer')
<!--/.Footer-->

<!-- jQuery tooltips -->
<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<!-- Initializations -->
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
