<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <meta name="theme-color" content="#1a6dff"/>
        <title>@yield('title','AVapeCado')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        @include("layouts.navbar")
        <main class="container mt-4">
            @yield("content")
        </main>
    </body>
</html>
