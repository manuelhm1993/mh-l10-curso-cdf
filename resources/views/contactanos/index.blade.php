@extends('layouts.plantilla')

@section('title', 'MHenriquez - Contáctanos')

@section('css')
    <style>
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
@endsection

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

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>
            Correo:
            <br>
            <input type="email" name="email" placeholder="Correo">
        </label>
        <br>

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>
            Mensaje:
            <br>
            <textarea name="message" rows="4" placeholder="Mensaje"></textarea>
        </label>
        <br>

        @error('message')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Enviar mensaje</button>
    </form>
@endsection

@section('js')
    @if (session('feedback'))
        <script>
            alert("{{ session('feedback') }}");
        </script>
    @endif
@endsection
