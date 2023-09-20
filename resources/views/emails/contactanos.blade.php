@extends('layouts.app-mail')

@section('css')
    <style>
        h1 {
            color: blue;
        }
    </style>
@endsection

@section('content')
    <h1>Nuevo mensaje</h1>

    <h3>Remitente</h3>
    <ul>
        <li>Nombre: {{ $contacto['name'] }}</li>
        <li>Correo: {{ $contacto['email'] }}</li>
    </ul>

    <h3>Mensaje</h3>
    <p>{{ $contacto['message'] }}</p>
@endsection
