<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/app.css">

        <title>TestFD_Teguh-Rianto</title>
    </head>
    <body>
        @include('layouts.partials.header')
        <main id="app">
            @yield('content')
        </main>
        @include('layouts.partials.footer')
        <script src="/js/app.js"></script>
    </body>
</html>
