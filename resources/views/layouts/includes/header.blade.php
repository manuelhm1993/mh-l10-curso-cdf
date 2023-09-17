<header>
    <h1>MHenriquez</h1>

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
                    {{-- Activar cursos en todas las arutas subyacentes --}}
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
