<!-- products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Product List</h1>

    <ul>
        @foreach ($products as $product)
            <li>
                <h3>{{ $product->name }}</h3>
                <p>Price: ${{ $product->price }}</p>
                <p>Description: {{ $product->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection