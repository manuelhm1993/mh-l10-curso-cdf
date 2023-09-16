@extends('layouts.plantilla')

@section('title', 'MHenriquez - Curso ' . $curso->name)

@section('content')
    <h1>Bienvenidos al curso {{ $curso->name }}</h1>

    <a href="{{ route('cursos.index') }}">Listar cursos</a>

    <p>
        <strong>Categoría: </strong> {{ $curso->categoria }}
    </p>

    <p>
        {{ $curso->description }}
    </p>
@endsection
