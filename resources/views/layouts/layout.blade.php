<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.ibb.co/cFT0Mb8/logo.png" type="image/x-icon">
    <title>Everest</title>
    @livewireStyles
</head>
<body class="bg-gray-400">
    <header class="bg-blue-400 shadow-md">
        <ol class="flex flex-row justify-between p-2 text-xl">
            <li><a href="{{ url('/') }}">Everest</a></li>
            <li><a href="{{ url('dashboard') }}">Menu</a></li>
        </ol>
    </header>
    <main>
        @if(session('info'))
        <div class="bg-white">
            <p class="text-xl text-center text-blue-400 font-bold m-4 p-1">{{ session('info') }}</p>
        </div>
        @endif
        @yield('content')
    </main>
    @livewireScripts

</body>
</html>