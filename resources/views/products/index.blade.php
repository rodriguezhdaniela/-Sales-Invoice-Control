@extends('layouts.base')

@section('content')
    <div class=”row”>
        <div class="col">
            <h1>Products</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/products/create">Create a new product</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id_product}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->unit_price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->amount}}</td>
                        <td><a href="/sellers/{{ $product->id }}/edit">Edit</td>
                        <td><a href="/sellers/{{ $product->id }}/confirmDelete">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
