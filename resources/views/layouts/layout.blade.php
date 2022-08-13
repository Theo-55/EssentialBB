<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EssentialBB</title>

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    <!-- Fonts -->

    <!-- Styles -->

</head>

<body>
@extends('nav/nav');
<div id="app">

    @yield('content');

</div>
</body>
</html>
