<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pokedex | @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('bootstrap\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css\laradex.css')}}">
    </head>
    
    <body>
        @include('navbar')
        <section class="container">
            @yield('section')
        </section>
        <script src="{{asset('bootstrap/js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>
</html>