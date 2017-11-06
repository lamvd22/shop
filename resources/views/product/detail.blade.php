@extends('app')

@section('title', 'Sản phẩm')

@section('content')
    <p>Name: {{$product['name']}}</p>
    <p>SKU: {{$product['sku']}}</p>
    <p>Price: {{$product['price']}}</p>
    <p>Short des: {{$product['short_description']}}</p>
    <p>Long des: {{$product['long_description']}}</p>
    <p>Modified: {{$product['updated_at']}}</p>
    <p>Created: {{$product['created_at']}}</p>

    @foreach ($photos as $photo)
    <img src="{{ asset($photo['url']) }}">
    @endforeach
@endsection