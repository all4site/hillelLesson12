@extends('layouts.main')
@section('content')
    <h1 class="text-center">Edit {{$product->name}}</h1>
    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Product name</label>
            <input type="text" name="name" value="{{$product->name}}" class="form-control" id="name" placeholder="Enter
            product name">
        </div>

        <div class="form-group">
            <label for="price">Product name</label>
            <input type="text" name="price" value="{{$product->price}}" class="form-control" id="price"
                   placeholder="Enter price">
        </div>

        <div class="form-group">
            <label for="description">Product description</label>
            <textarea name="description" class="form-control" id="description" rows="3"
                      placeholder="Description">{{$product->description}}</textarea>
        </div>
        </div>
        <div class="col-6">
        <button class="btn btn-success" type="submit">Update</button>
        </div>

        <div class="col-6 text-right">
        <a href="{{route('products.index')}}">
            <button class="btn btn-success" type="submit">Home</button>
        </a>
        </div>

        <div class="row">

    </form>

@endsection