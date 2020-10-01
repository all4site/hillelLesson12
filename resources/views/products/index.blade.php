@extends('layouts.main')
@section('content')
    <h1 class="text-center">Все товары</h1>

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
                    <th scope="col">Button</th>
                </tr>
                </thead>
                <tbody>
                @foreach($all as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}. грн</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a href="{{route('products.show', $product->id)}}" class="btn btn-success">
                               Show
                            </a>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        {{ $all->links() }}
    </div>
@endsection