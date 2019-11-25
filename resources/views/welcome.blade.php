<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Renzo Peluqueria</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>

<body>
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 text-center">
                <!--a class="blog-header-logo text-dark" href="#"> <img src="images/logo.png" width="210" height="80" alt=""></a-->
                <img src="images/logo.png" width="210" height="80" alt="">
            </div>
        </div>
    </header>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Iniciar Sesión</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="text-justify col-sm-12">
                        <div id="carousel1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel1" data-slide-to="1"></li>
                                <li data-target="#carousel1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active" data-interval="2"><img src="images/p1.jpg" alt="First slide image" class="center-block">
                                </div>
                                <div class="item" data-interval="2"><img src="images/p2.jpg" alt="Second slide image" class="center-block">
                                </div>
                                <div class="item" data-interval="2"><img src="images/p3.jpg" alt="Third slide image" class="center-block">
                                </div>
                                <div class="item" data-interval="2"><img src="images/p4.jpg" alt="Fourth slide image" class="center-block">
                                </div>
                                <div class="item" data-interval="2"><img src="images/p5.jpg" alt="Fifth slide image" class="center-block">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></a>
                        </div>
                        <br />
                        Renzo peluquería tiene sus puertas abiertas desde 1995 y hasta el día de hoy funciona como una peluquería reconocida en el mercado local, desde sus inicios y hasta el día de hoy tiene como objetivo brindar la <b>mejor calidad al menor precio</b>, instalaciones de primera calidad, entretenimiento y un excelente servicio para hombre, mujeres y niños.
                        <br />
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--FOOTER-->
    <footer class="blog-footer">
        <div class="row">


            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><img src="images/location.png" width="25" height="25" alt=""></li>
                    <br>
                    <li>Caldas, Antioquia</li>
                    <li>Calle 131 Sur 50-46, Pasaje Alejandrino</li>
                </ul>
            </div>

            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><img src="images/clock.png" width="25" height="25" alt=""></li>
                    <br>
                    <li>Horarios de Atención:</li>
                    <li>Lunes a Viernes: <strong>10 am - 8 pm</strong></li>
                    <li>Sábados: <strong>8 am - 8 pm</strong></li>
                    <li>Domingos y Festivos: <strong>9 am - 5 pm</strong></li>
                </ul>
            </div>

            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><img src="images/phone.png" width="24" height="24" alt=""></li>
                    <br>
                    <li>Telefono: 278 26 35</li>
                    <li>Celular: 300 214 0778</li>
                </ul>
            </div>


        </div>
    </footer>
</body>

</html>