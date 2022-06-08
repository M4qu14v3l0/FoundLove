@extends('layouts.crud')
@section('container-crud')
    <h1>Edit User</h1>
    <form action="/crud/update/{{$user->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name='name' type="text" class="form-control" value="{{$user-> name}}">

        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection
