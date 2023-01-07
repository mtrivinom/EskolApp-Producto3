

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eskolapp</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- css app -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>

    </head>
    <body class="degradado">
            <div class="degradado">
            <section class="hero">
                <div class="container">
                        <div class="hero__content">
                            <div class="w-80 d-flex justify-content-between p-4">
                                <div class="home__header__logo">
                                    <img src="{{asset('images/Recurso 2.png')}}" style="width: 500px; margin-right: 60px;"/>
                                </div>
                            </div>
                            <div class="info">
                                <h1 style="font-size: 80px;"><span>Eskolapp</span></h1>
                                <p>Aplicación de gestión escolar</p>
                                <ul>
                                    <li>Regístrate para acceder a tu área de usuario.</li>
                                    <li>Utiliza las notificaciones para recibir información del profesorado.</li>
                                    <li>Consulta los datos de tu perfil y modifícalos en caso de ser necesario.</li>
                                </ul>
                                <div class="hero__buttons">
                                    @if (Route::has('login'))
                                        @auth
                                            <a class="btn btn-outline-success" href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Continuar Sesión</a>
                                        @else
                                            <a class="btn btn-outline-success" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Acceso</a>

                                            @if (Route::has('register'))
                                                <a class="btn btn-outline-success" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registro</a>
                                            @endif
                                        @endauth
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            </div>
    </body>
</html>

