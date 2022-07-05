@extends('layouts.crud')
@section('container-crud')
    FoundLove's users
    <a href="crud/create" type="button" class="btn btn-outline-primary ">Add</a>
    <a href="/crud/export" type="button" class="btn btn-outline-primary ">Export</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Description</th>
            <th scope="col">Sex</th>
            <th scope="col">Sexual orientation</th>
            <th scope="col">Age</th>
            <th scope="col">Studies</th>
            <th>Actions you can do</th>

        </tr>
        </thead>
        <tbody>
        @foreach($user as $users)

            <tr>
                <th scope="row">{{$users->name}}</th>
                <td>{{$users->email}}</td>
                <td>{{$users->description}}</td>
                <td>{{$users->sex}}</td>
                <td>{{$users->sexual_orientation}}</td>
                <td>{{$users->age}}</td>
                <td>{{$users->studies}}</td>

                <td >
                    <a href="crud/{{$users->id}}/edit" type="button" class="btn btn-primary btn-sm">Edit</a>
                    <a href="crud/{{$users->id}}/delete" type="button" class=" btn btn-secondary btn-sm">Delete</a>
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
