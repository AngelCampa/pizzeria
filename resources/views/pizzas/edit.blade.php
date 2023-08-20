@extends('layouts.app')

@section('content')
    <h1>Editar pizza</h1>
    <form action="{{ route('pizzas.update', $pizza->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $pizza->nombre }}" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="{{ $pizza->precio }}" required>
        <!-- Agrega más campos según tus requisitos -->
        <button type="submit">Actualizar Pizza</button>
    </form>
@endsection
