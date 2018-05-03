@extends('master')

@section('content')
    <h4>Bikes</h4>
    <a href="{{route('laptops')}}">You may like Laptops</a>
@endsection

@section('menu')
    <li><a href="{{route('bikes')}}">Sports Bike</a></li>
@endsection