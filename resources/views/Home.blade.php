<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <h1>Welcome to my Page</h1>

    <nav class="navbar bg-primary">
        <a href="{{ route
        ('home') }}">Home</a>|
        <a href="{{ route
        ('about') }}">About</a>|
        <a href="{{ route
        ('contact') }}">Contact</a>
    </nav>
</body>
</html>
<style>
    a{
        color: black;
    }
    a:hover{
        color: yellow;
    }
</style>