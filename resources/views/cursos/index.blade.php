@extends('layouts.plantilla')

@section('title', 'MHenriquez - Cursos')

@section('content')
    <h1>Bienvenido a la página principal de cursos</h1>

    <section>
        <h2>Listado de cursos</h2>

        <ul>
            @foreach ($cursos as $curso)
                <li>Nombre: {{ $curso->name }}</li>
            @endforeach
        </ul>
    </section>

    {{ $cursos->links() }}
@endsection
