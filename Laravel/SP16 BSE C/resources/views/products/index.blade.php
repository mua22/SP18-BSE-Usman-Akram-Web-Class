@extends('master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>price</th>
            <th>Desc</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    {{$products->render()}}
    @endsection