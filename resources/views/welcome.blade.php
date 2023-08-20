@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light shadow rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Welcome to Pizza App</h2>
                </div>

                <div class="card-body">
                    <p class="lead">Explore our delicious pizza menu and place your order!</p>
                    <a href="{{ route('pizzas.index') }}" class="btn btn-success btn-lg">View Pizza Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
