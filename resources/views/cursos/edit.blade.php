@extends('layouts.plantilla')

@section('title', 'MHenriquez - Editar curso')

@section('content')
    <h1>En esta página podrás editar un curso</h1>

    <a href="{{ route('cursos.index') }}">Listar cursos</a>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')
        <br>
        <label>
            Nombre:
            <p>
                {{-- old('name', $curso->name) Si se pasa un segundo campo, se puede usar en edit --}}
                <input type="text" name="name" value="{{ old('name', $curso) }}">
            </p>

            @error('name')
                <span>{{ $message }}</span>
                <br>
            @enderror
        </label>

        <label>
            Categoría:
            <p>
                <input type="text" name="categoria" value="{{ old('categoria', $curso) }}">
            </p>
        </label>

        <label>
            Descripción:
            <p>
                <textarea name="description" rows="5">{{ old('description', $curso) }}</textarea>
            </p>

            @error('description')
                <span>{{ $message }}</span>
                <br>
            @enderror
        </label>

        <button type="submit">Actualizar curso</button>
    </form>
@endsection
