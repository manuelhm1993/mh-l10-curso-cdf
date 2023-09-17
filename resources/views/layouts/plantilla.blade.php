<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @yield('css')
</head>
<body>
    <header>
        <h1>MHenriquez</h1>

        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    {{-- CDN de tailwindcss --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    @yield('js')
</body>
</html>
