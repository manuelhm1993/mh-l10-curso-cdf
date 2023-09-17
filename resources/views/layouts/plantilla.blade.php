<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @yield('css')

    <style>
        .active {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>MHenriquez</h1>

        {{-- Sustituir a var_dump --}}
        {{-- @dd(request()->routeIs('home')) --}}

        <nav>
            <ul>
                <li>
                    <a
                        class="{{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >
                        Home
                    </a>
                </li>
                <li>
                    <a
                        class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}"
                        href="{{ route('cursos.index') }}"
                    >
                        Cursos
                    </a>
                </li>
                <li>
                    <a
                        class="{{ request()->routeIs('nosotros') ? 'active' : '' }}"
                        href="{{ route('nosotros') }}"
                    >
                        Nosotros
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    {{-- CDN de tailwindcss --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    @yield('js')
</body>
</html>
