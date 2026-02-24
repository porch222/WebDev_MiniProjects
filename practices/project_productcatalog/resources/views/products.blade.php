@extends('layouts.app')

@section('title', 'Product Catalog')

@section('content')

    <h2>Product List</h2>

    @foreach ($products as $product)
        <div style="margin-bottom: 20px;">

            <h3>{{ $product['name'] }}</h3>
            <p>Price: ${{ $product['price'] }}</p>

            @if ($product['stock'] > 0)
                <p style="color: green;">In Stock</p>
            @else
                <p style="color: red;">Out of Stock</p>
            @endif

        </div>
    @endforeach

@endsection