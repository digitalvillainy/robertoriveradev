<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Favicon--}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('media/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('media/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('media/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/site.webmanifest')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=handjet:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=roboto:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <meta name="author" content="Roberto Rivera aka Bobby Rivera" />
    <meta name="description" content="@yield('description')"/>
    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans flex flex-col min-h-screen bg-gradient-to-b from-[#080724] to-[#38376D]">
    <!-- Page Heading -->
    <header>
        @include('components.navbar')
    </header>

    <!-- Page Content -->
    <main class="grow">
        @yield('content')
    </main>

    <!-- Footer Content -->
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
