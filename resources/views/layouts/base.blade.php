<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.ibb.co/cFT0Mb8/logo.png" type="image/x-icon">
    <title>Everest</title>
    <!-- Global site tag (gtag.js) - Google Analytics --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-217050510-1"></script> 
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-217050510-1'); </script> 
</head>
<body class="bg-gray-200">
    <Header class="bg-center bg-cover bg-top md:h-52" style="background-image: url(https://i.ibb.co/2SrXnQy/fondos.jpg);">
        <section class="bg-center bg-gray-900 bg-opacity-50 md:h-52">
            <div class="p-1">
                <div class="sm:flex justify-between p-2 flex-wrap text-center">
                    <a href="{{ url('/') }}" class="text-2xl text-white font-semibold">Everest</a>
                    <ul class="sm:flex flex-wrap text-base text-white p-4">
                        <li><a href="{{ url('promociones') }}" class="p-2">Promociones</a></li>
                        <li><a href="{{ url('productos') }}" class="p-2">Productos</a></li>
                        <li><a href="{{ url('servicios') }}" class="p-2">Servicios</a></li>
                        <li><a href="{{ url('contacto') }}" class="p-2">Contacto</a></li>
                        @if(Route::has('login'))
                            @auth
                            <li><a href="{{ url('/dashboard') }}" class="p-2">Mi perfil</a></li>
                        @else
                            @if(Route::has('register'))
                            <li><a href="{{ url('register') }}" class="p-2">Suscribete</a></li>
                            @endif
                            <li><a href="{{ url('login') }}" class="p-2">Ingresar</a></li>
                            @endauth
                        @endif
                    </ul>
                </div>
                <div>
                    <p class="text-center text-2xl py-2 text-white">Hielo y agua Everest</p>
                    <p class="text-center text-2xl py-2 text-white">La unica agua que acaba con la sed</p>
                </div>
            </div>
        </section>
    </Header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-gray-900 text-white p-4">
        <section class="grid md:grid-cols-4 text-center md:text-left">
            <div class="m-2">
                <p class="text-xl mb-1">Menu rapido</p>
                <ol>
                    <li><a href="{{ url('promociones') }}">Promociones</a></li>
                    <li><a href="{{ url('contacto') }}">Contacto</a></li>
                    <li><a href="{{ url('servicios') }}">Servicios</a></li>
                </ol>
            </div>
            <div class="m-2">
                <p class="text-xl mb-1">Síguenos en</p>
                <ol>
                    <li><a href="https://www.facebook.com/IceEverest">Facebook</a></li>
                </ol>
            </div>
            <div class="m-2">
                <p class="text-xl mb-1">Contacto</p>
                <ol>
                    <li>Tel: 9191463299</li>
                    <li>everest212@outlook.com</li>
                </ol>
            </div>
            <div class="m-2">
                <a href="{{ url('privacidad') }}">Aviso de privacidad</a>
            </div>
        </section>
    </footer>
</body>
</html>