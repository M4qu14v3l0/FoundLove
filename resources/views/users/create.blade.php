@extends('layouts.crud')
@section('container-crud')
    <h1>New User</h1>
    <form action="/crud/insert" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name='name' type="text" class="form-control">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
