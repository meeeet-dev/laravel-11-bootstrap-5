<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta -->
    <meta name="title" content="{{ config('app.name', 'Laravel') }}">
    <meta name="description" content="{{ config('app.description', 'Laravel') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])

    @stack('styles')
</head>
<body>
    <div id="app">
        @include('layouts.inc.header')

        <main>
            @yield('content')
        </main>

        @include('layouts.inc.footer')
    </div>

    @vite(['resources/js/app.js'])

    @stack('scripts')
</body>
</html>
