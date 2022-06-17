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

        <script src="https://kit.fontawesome.com/ac7715c080.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <header class="py-4 bg-dark text-light">
            <nav class="nav justify-content-center">
              <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
              <a class="nav-link" href="{{route('comics.create')}}">Create</a>
              <a class="nav-link disabled" href="#">Disabled link</a>
            </nav>
        </header>

        <main class="py-5">
            @yield('content')
        </main>
        
        <footer class="py-3 text-center bg-dark text-light">
            Awesome Footer &copy;
        </footer>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
