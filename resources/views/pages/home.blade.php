@extends('layouts.main-layout')

@section('content')
    
    <h1>Products</h1>
    <a href="{{ route('product.create') }}">CREATE NEW PRODUCT</a>
    @foreach ($categories as $category)
        <h2>{{ $category -> name }}</h2>
        <ul>
            @foreach ($category -> products as $product)
                @include('components.product.product-elem')
            @endforeach
        </ul>
    @endforeach

@endsection