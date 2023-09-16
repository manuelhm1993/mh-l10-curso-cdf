@extends('layouts.plantilla')

@section('title', 'MHenriquez - Cursos')

@section('content')
    <h1>Bienvenido a la página principal de cursos</h1>

    <section>
        <h2>Listado de cursos</h2>

        @foreach ($cursos as $curso)
            <ul>
                <li>Nombre: {{ $curso->name }}</li>
                <li>Categoría: {{ $curso->categoria }}</li>
            </ul>
            <hr>
        @endforeach
    </section>

    {{ $cursos->links() }}
@endsection
