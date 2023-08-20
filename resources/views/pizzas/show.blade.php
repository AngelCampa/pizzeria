@extends('layouts.app')

@section('content')
    <h1>Detalles de la pizza</h1>
    <p>Nombre: {{ $pizza->nombre }}</p>
    <p>Precio: {{ $pizza->precio }}</p>
    <!-- Muestra más detalles según tus requisitos -->
    <a href="{{ route('pizzas.edit', $pizza->id) }}">Editar</a>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
