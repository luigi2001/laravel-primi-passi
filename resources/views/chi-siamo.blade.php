<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h1>Hello World</h1>
                </div>

                <div class="links">
                    <a href="{{ route('home') }}"> Home </a>
                    <a href="{{ route('chi_siamo') }}"> Chi siamo </a>
                    <a href="{{ route('contact') }}"> Contatti </a>
                </div>
                <p>{{ $about }}</p>
            </div>
        </div>
    </body>
</html>
