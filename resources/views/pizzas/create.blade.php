@extends('layouts.app')

@section('content')
    <h1>Crear nueva pizza</h1>
    <form action="{{ route('pizzas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required>
        <!-- Agrega más campos según tus requisitos -->
        <button type="submit">Crear Pizza</button>
    </form>
@endsection
