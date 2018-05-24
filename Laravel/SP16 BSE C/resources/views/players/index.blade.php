@extends('master')

@section('content')
    <h2>{{$page_title}}</h2>
    <a href="/players/create" class="btn btn-success">Add New Player</a>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{$player->id}}</td>
                    <td>{{$player->name}}</td>
                    <td><a href="/players/{{$player->id}}/edit" class="btn btn-info">Edit</a>
                        <form action="/players/{{$player->id}}" method="post" class="form-inline">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-danger" value="delete">
                        </form>
                        </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {{$players->render()}}
@endsection