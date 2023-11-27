<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    @include('website.includes.style')

</head>

<body>

    @include('website.includes.header')

    @yield('body')

    @include('website.includes.footer')

    @include('website.includes.scripts')

</html>
