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
                {{-- Recuperar la data anterior de los inputs si ocurre un error de validación, valor por default null --}}
                <input type="text" name="name" value="{{ old('name') }}">
            </p>

            @error('name')
                <span>{{ $message }}</span>
                <br>
            @enderror
        </label>

        <label>
            Slug:
            <p>
                <input type="text" name="slug" value="{{ old('slug') }}">
            </p>

            @error('slug')
                <span>{{ $message }}</span>
                <br>
            @enderror
        </label>

        <label>
            Categoría:
            <p>
                <input type="text" name="categoria" value="{{ old('categoria') }}">
            </p>
        </label>

        <label>
            Descripción:
            <p>
                <textarea name="description" rows="5">{{ old('description') }}</textarea>
            </p>

            @error('description')
                <span>{{ $message }}</span>
                <br>
            @enderror
        </label>

        <button type="submit">Agregar curso</button>
    </form>
@endsection
