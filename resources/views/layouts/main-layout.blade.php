<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Relation 2 - Many to many</title>
    
    @vite(['resources/js/app.js'])

    @yield('head')

</head>
<body>
    
    @include('components.header')
    @include('components.errors')
    <div class="container">
        @yield('content')
    </div>
    @include('components.footer')

</body>
</html>