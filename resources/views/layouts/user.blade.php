<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 text-center">
                    <img src="{{ asset('images/logo.png') }}" width="210" height="80" alt="" />
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid col-lg-offset-2">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="defaultNavbar1">
                        <ul class="nav navbar-nav">
                            @if(Auth::user()->role_id==1)
                            <li><a href="{{url('homeAdmin')}}">Inicio</a> </li>
                            <li><a href="{{url('pagos')}}">Pagos</a> </li>
                            <li><a href="{{url('citas')}}">Citas</a></li>
                            <li><a href="{{url('usuarios')}}">Usuarios</a> </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('horario')}}">Estilistas</a> </li>
                            <li><a class="nav-link" href="/servicios">Servicios</a></li>
                            @endif
                            @if(Auth::user()->role_id==2)
                            <li><a href="{{url('home')}}">Inicio</a> </li>
                            <li><a href="{{url('/perfilcliente')}}">Perfil</a></li>
                            @endif
                            @if(Auth::user()->role_id==3)
                            <li><a href="{{url('homeEstilista')}}">Inicio</a> </li>
                            <li><a href="">Perfil</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>
        </header>
        <br />
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