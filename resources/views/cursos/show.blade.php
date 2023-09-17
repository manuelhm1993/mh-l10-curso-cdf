@extends('layouts.plantilla')

@section('title', 'MHenriquez - Curso ' . $curso->name)

@section('content')
    <h1>Bienvenidos al curso {{ $curso->name }}</h1>

    <a href="{{ route('cursos.index') }}">Listar cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>

    <p>
        <strong>Categoría: </strong> {{ $curso->categoria }}
    </p>

    <p>
        {{ $curso->description }}
    </p>

    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
