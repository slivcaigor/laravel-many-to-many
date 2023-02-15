@extends('layouts.main-layout')

@section('content')
    
    <h1>Products</h1>
    <a href="{{ route('product.create') }}">CREATE NEW PRODUCT</a>
    <ul>
        @foreach ($products as $product)
            @include('components.product.product-elem')
        @endforeach
    </ul>

@endsection