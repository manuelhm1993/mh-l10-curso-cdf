@extends('layouts.plantilla')

@section('title', 'MHenriquez - Crear cursos')

@section('content')
    <h1>En esta página podrás crear un nuevo curso</h1>

    <a href="{{ route('cursos.index') }}">Listar cursos</a>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <br>
        <label>
            Nombre:
            <p>
                <input type="text" name="name">
            </p>

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </label>

        <label>
            Categoría:
            <p>
                <input type="text" name="categoria">
            </p>
        </label>

        <label>
            Descripción:
            <p>
                <textarea name="description" rows="5"></textarea>
            </p>

            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </label>

        <div>
            <button type="submit">Agregar curso</button>
        </div>
    </form>
@endsection
