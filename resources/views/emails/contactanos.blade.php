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
        <li>Nombre: {{ $user->name }}</li>
        <li>Correo: {{ $user->email }}</li>
    </ul>

    <h3>Mensaje</h3>
    <p>{{ $message }}</p>
@endsection
