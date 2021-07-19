<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fakes</title>

        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="">

            <div class="content">
                <div class="title m-b-md">
                    Agenzia Viaggi
                </div>

                <div class="links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('travels.index') }}">Proposte</a>
                </div>
            </div>

            <div class="container">
                @yield('main')
            </div>
        </div>
    </body>
</html>