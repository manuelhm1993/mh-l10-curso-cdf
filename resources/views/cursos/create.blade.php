@extends('layouts.plantilla')

@section('title', 'MHenriquez - Crear cursos')

@section('content')
    <h1>En esta página podrás crear un nuevo curso</h1>

    <a href="{{ route('cursos.index') }}">Listar cursos</a>
@endsection
