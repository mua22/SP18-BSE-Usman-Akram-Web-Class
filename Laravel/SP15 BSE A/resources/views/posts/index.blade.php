@extends('master')

@section('content')
    <h3>Show All Posts</h3>

    @foreach($posts as $post)
        <h4>{{$post->title}}</h4>
        <h4>{{$post->author}}</h4>

        <p>{{$post->content}}</p>
        <hr>
    @endforeach
{{$posts->render()}}

    @endsection