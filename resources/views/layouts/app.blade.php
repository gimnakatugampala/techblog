<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techblog - Tech World in One Place</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-200">
    <!-- Navbar -->

    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-left">
            <li><a href="{{route('home')}}" class="p-3 text-2xl">Techblog</a></li>
        </ul>

        <ul class="flex items-center">
            <li><a href="{{route('home')}}" class="p-3">Home</a></li>
            <li><a href="" class="p-3">About</a></li>
            <li><a href="" class="p-3">Contact Us</a></li>
            <li><a href="" class="p-3">Services</a></li>
            <li><a href="" class="p-3">Blog</a></li>
            <li><a href="" class="p-3">Login</a></li>
            <li><a href="" class="p-3">Register</a></li>
            <li><a href="" class="p-3">Logout</a></li>
        </ul>

    </nav>


    @yield('content')

</body>

</html>