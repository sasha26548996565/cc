<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'AAP Shop')</title>

        @vite(['resources/css/app.css', 'resources/sass/main.sass', 'resources/js/app.js',])
    </head>
    <body>
        
    </body>
</html>
