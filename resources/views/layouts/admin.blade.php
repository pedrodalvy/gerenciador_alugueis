<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Gerenciador de Aluguéis')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.3.2/dist/select2-bootstrap4.min.css">
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
<script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('js/select2/select2.min.js') }}"></script>
<script src="{{ asset('js/select2/pt-BR.js') }}"></script>

<!-- Initializations -->
<script src="{{ asset('js/main.js') }}"></script>
</body>

<script>
    $(document).ready(function(){
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.cep').mask('00000-000');
        $('.cpf').mask('000.000.000-00');


        let maskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            options = {onKeyPress: function(val, e, field, options) {
                    field.mask(maskBehavior.apply({}, arguments), options);
                }
            };

        $('.phone').mask(maskBehavior, options);
    });
    (function select2() {
        $('.selectMunicipios').select2({
            minimumInputLength: 3,
            width: '100%',
            theme: 'bootstrap4',
            language: "pt-BR",
            ajax: {
                url: '{{ route('cidadesApi') }}',
                data: function (params) {
                    return {
                        cidade: params.term
                    }
                },
                processResults: function (data) {
                    return {
                        results: data.map(function (cidade) {
                            return {
                                id: cidade.id,
                                text: cidade.nome + '/' + cidade.uf
                            }
                        })
                    }
                }
            }
        });
    })();
</script>
</html>
