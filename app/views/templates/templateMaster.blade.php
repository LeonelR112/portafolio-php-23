<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta-desc')" />
    <title>@yield('title')</title>
    {!! cssFile('bootstrap.min') !!}
    {!! cssFile('styles', false) !!}
    {!! cssFile('text-cursor', false) !!}
    {!! cssFile('animations', false) !!}
    {!! cssFile('lightbox', false) !!}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {!! jsFile('jquery-3.7.1') !!}
    @include("layouts.globalConfigjs")
    @yield('scripts-header')
</head>
<body>
    @include('layouts.navbar')
    <main>
        @yield('content')
    </main>
    @include("layouts.footer")
    {!! jsFile("libs/page") !!}
    {!! jsFile("bootstrap.min") !!}
    {!! jsFile("popper.min") !!}
    {!! jsFile("lightbox", false) !!}
    {!! jsFile("main", false) !!}
    @yield('scripts-footer')
</body>
</html>