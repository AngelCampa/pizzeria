@extends('layouts.app')

@section('content')
    <h1>Listado de pizzas</h1>
    <ul>
        @foreach($pizzas as $pizza)
            <li>{{ $pizza->nombre }} - Precio: {{ $pizza->precio }}</li>
        @endforeach
    </ul>
@endsection
