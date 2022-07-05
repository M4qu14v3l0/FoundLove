@extends('layouts.crud')
@section('container-crud')
    <h1>Edit User</h1>
    <form action="/crud/update/{{$user->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name='name' type="text" class="form-control" value="{{$user-> name}}">
            <label class="form-label">Email</label>
            <input name='email' type="text" class="form-control" value="{{$user-> email}}">
            <label class="form-label">Sex</label>
            <input name='sex' type="text" class="form-control" value="{{$user-> sex}}">
            <label class="form-label">Age</label>
            <input name='age' type="text" class="form-control" value="{{$user-> age}}">

        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection
