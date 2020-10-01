@extends('layouts.main')
@section('content')
    <h1 class="text-center">{{$product->name}}</h1>

    <a href="{{route('products.create')}}">
        <button class="btn btn-info btn-block">Create</button>
    </a>

    <div class="row mt-5">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}. грн</td>
                </tr>
            </tbody>
        </table>

        {{--        {{ $products->links() }}--}}
    </div>
    <a href="{{route('products.index')}}">
        <button class="btn btn-outline-success btn-block">Home</button>
    </a>
@endsection