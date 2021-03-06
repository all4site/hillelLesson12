@extends('layouts.main')
@section('content')
    <h1 class="text-center">Add new product</h1>
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Product name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name">
        </div>

        <div class="form-group">
            <label for="price">Product name</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
        </div>

        <div class="form-group">
            <label for="description">Product description</label>
            <textarea name="description" class="form-control" id="description" rows="3"
                      placeholder="Description"></textarea>
        </div>

        <button class="btn btn-success" type="submit">Create</button>
    </form>

@endsection