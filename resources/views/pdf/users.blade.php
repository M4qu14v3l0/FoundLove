<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <table>
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

            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
