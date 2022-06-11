<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- styles sheet !-->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- font awesome !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">

    <title>Home</title>
</head>

<body>
    <div class="general-wrapper-layout">
        @yield('general-wrapper')
    </div>
    <script type="text/javascript" src="{{URL::asset('js/userInfo.js')}}"></script>
</body>
</html>
