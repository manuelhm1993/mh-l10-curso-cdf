@extends('layouts.plantilla')

@section('title', 'MHenriquez - Contáctanos')

@section('content')
    <h1>Déjanos un mensaje</h1>

    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" placeholder="Nombre">
        </label>
        <br>

        <label>
            Correo:
            <br>
            <input type="email" name="email" placeholder="Correo">
        </label>
        <br>

        <label>
            Mensaje:
            <br>
            <textarea name="message" rows="4" placeholder="Mensaje"></textarea>
        </label>
        <br>

        <button type="submit">Enviar mensaje</button>
    </form>
@endsection
