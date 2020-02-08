<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" target="_blank">
                <strong class="blue-text">Gerenciador de Aluguéis</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <!-- Content -->
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <!-- Content -->
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">
            <img src="{{ asset('img/logo.jpg') }}" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action waves-effect" id="navHome"
                href="{{ route('admin.home') }}"> Página inicial
            </a>

            <a class="list-group-item list-group-item-action waves-effect" id="navImovel"
               href="{{ route('imovel.index') }}"> Imóveis
            </a>

            <a class="list-group-item list-group-item-action waves-effect" id="navProprietarios"
                href="{{ route('proprietarios.index') }}"> Proprietários
            </a>

            <a class="list-group-item list-group-item-action waves-effect" id="navInquilinos"
               href="{{ route('inquilinos.index') }}"> Inquilinos
            </a>

            <a class="list-group-item list-group-item-action waves-effect" id="navPessoas"
               href="{{ route('pessoas.index') }}"> Pessoas
            </a>
            <hr>
        </div>

    </div>
    <!-- Sidebar -->

</header>