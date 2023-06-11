<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title> 
        <!-- <title>Layout Page Title</title>  -->
    </head>
    <body>
    <h1>@yield('heading')</h1>

    <ul>
        <li><a href="{{ route('student_home') }}">Home</a></li>
        <li><a href="{{ route('student_about') }}">About</a></li>
    </ul>

    <p>
        This is layout page content. This is layout page content. This is 
        layout page content. This is layout page content. This is layout page 
        content. This is layout page content.
    </p>

    </body>
</html>