<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BootStrap</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar bg-secondary">
            <ul>
                <li> <a target="_blank" href="https://www.pexels.com/search/house/">Home</a> </li>
                <li> <a href="">About</a> </li>
                <li> <a href="">Contact Us</a> </li>
            </ul>
    </nav>
</body>

</html>
<style>
    
     .navbar a{
        position: relative;
        color: black;
        text-decoration: none;
        font-size: 25px;
        transition: font-size 0.3s ease;
        font-family: Poppins;
    }
    .navbar a:hover{
        position: absolute;
        color: yellowgreen;
        font-size: 30px;
    }
    li{
        display: inline-block;
        margin: 10px;
    }
    ul{
        padding: 0;
        margin: 0;
        list-style-type: none;
        margin-left: 0px
    }
</style>