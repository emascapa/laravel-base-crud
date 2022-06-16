<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-comicsAgainBastaaaa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <header class="py-4 bg-dark text-light">
            <nav class="nav justify-content-center">
              <a class="nav-link" href="{{route('games.index')}}">Comics</a>
              <a class="nav-link" href="{{route('games.create')}}">Create</a>
              <a class="nav-link disabled" href="#">Disabled link</a>
            </nav>
        </header>

        <main class="py-5">
            @yield('content')
        </main>
        
        <footer class="py-3 text-center bg-dark text-light">
            Awesome Footer &copy;
        </footer>

    </body>
</html>