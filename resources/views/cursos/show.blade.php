@extends('layouts.plantilla')

@section('title', 'MHenriquez - Curso ' . $curso->name)

@section('content')
    <h1>Bienvenidos al curso {{ $curso->name }}</h1>
@endsection
