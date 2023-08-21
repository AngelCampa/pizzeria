@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            <div class="card">
                <div class="card-header">Pizza Menu</div>

                <div class="card-body">
                    <a href="{{ route('pizzas.create') }}" class="btn btn-primary mb-3">Add New Pizza</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pizzas as $pizza)
                                <tr>
                                    <td>{{ $pizza->nombre }}</td>
                                    <td>${{ $pizza->precio }}</td>
                                    <td>
                                        <a href="{{ route('pizzas.show', $pizza->id) }}" class="btn btn-info btn-sm mr-1">View</a>
                                        <a href="{{ route('pizzas.edit', $pizza->id) }}" class="btn btn-primary btn-sm mr-1">Edit</a>
                                        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
