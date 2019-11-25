<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm ">

            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" width="200" height="70" alt="" style="margin-top: -0.9em;" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--FOOTER-->
    <footer class="blog-footer">
        <div class="row">
            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><img src="{{ asset('images/location.png') }}" width="25" height="25" alt=""></li>
                    <br>
                    <li>Caldas, Antioquia</li>
                    <li>Calle 131 Sur 50-46, Pasaje Alejandrino</li>
                </ul>
            </div>

            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><img src="{{ asset('images/clock.png ') }}" width="25" height="25" alt=""></li>
                    <br>
                    <li>Horarios de Atención:</li>
                    <li>Lunes a Viernes: <strong>10 am - 8 pm</strong></li>
                    <li>Sábados: <strong>8 am - 8 pm</strong></li>
                    <li>Domingos y Festivos: <strong>9 am - 5 pm</strong></li>
                </ul>
            </div>

            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><img src="{{ asset('images/phone.png') }}" width="24" height="24" alt=""></li>
                    <br>
                    <li>Telefono: 278 26 35</li>
                    <li>Celular: 300 214 0778</li>
                </ul>
            </div>


        </div>
    </footer>
</body>

</html>