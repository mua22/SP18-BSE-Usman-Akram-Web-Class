@extends('master')

@section('content')
    <h3>Add New Player</h3>
    <form action="/players" method="post">
@csrf
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
        </div>

        <button type="submit" class="btn btn-info">Submit</button>
    </form>
@endsection