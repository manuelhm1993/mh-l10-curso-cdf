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
                <input type="text" name="name" value="{{ $curso->name }}">
            </p>

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </label>

        <label>
            Categoría:
            <p>
                <input type="text" name="categoria" value="{{ $curso->categoria }}">
            </p>
        </label>

        <label>
            Descripción:
            <p>
                <textarea name="description" rows="5">{{ $curso->description }}</textarea>
            </p>

            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </label>

        <div>
            <button type="submit">Actualizar curso</button>
        </div>
    </form>
@endsection
