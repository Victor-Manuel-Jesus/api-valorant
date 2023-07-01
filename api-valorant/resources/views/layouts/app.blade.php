<!DOCTYPE html>
<html lang="es-cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/vendor/jquery/jquery-3.7.0.min.js') }}"></script>
    {{-- remix icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    {{-- STYLE GENERAL --}}
    <link rel="stylesheet" href="{{ asset('public/css/style-general.css') }}">
    @vite('resources/js/app.js')
    @yield('css')
    @yield('section')
</head>
@php
    $rutaPrincipal = "/public/img/";
    $arrayImg = ['home-1','home-2','home-3'];
    $conteo = count($arrayImg);
    $indice_aleatorio = mt_rand(0, $conteo - 1);
    $fondoAleatorio = $arrayImg[$indice_aleatorio];
    $assetCompleto = $rutaPrincipal.$fondoAleatorio.'.jpg';
@endphp
<body style="background-image: url({{ asset($assetCompleto) }})">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg" style="background-color: transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link active text-white" href="{{ route('index_agente') }}">Agentes</a>
                <a class="nav-link active text-white" href="{{ route('index_mapa') }}">Mapa</a>
                <a class="nav-link active text-white" href="{{ route('index_gamemode') }}">Tipos de juegos</a>
                <a class="nav-link disabled active text-white" href="{{ route('consultas') }}">Consultas</a>
                <a class="nav-link active text-white" href="{{ route('index_titulo') }}">titulos</a>
                <a class="nav-link active text-white" href="{{ route('index_player') }}">Player card</a>
                <a class="nav-link active text-white" href="{{ route('index_lvlBorder') }}">Level borde</a>


            </div>
        </div>
    </div>
    </nav>
    {{-- END NAV --}}
    <div id="app">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @yield('js')
</body>
</html>
