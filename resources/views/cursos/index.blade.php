@extends('layouts.plantilla')

@section('title', 'MHenriquez - Cursos')

@section('content')
    <h1>Bienvenido a la página principal de cursos</h1>

    <a href="{{ route('cursos.create') }}">Crear nuevo curso</a>

    <section>
        <h2>Listado de cursos</h2>

        <ul>
            @foreach ($cursos as $curso)
                <li>
                    <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a>
                </li>
            @endforeach
        </ul>
    </section>

    {{ $cursos->links() }}
@endsection
