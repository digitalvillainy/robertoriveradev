<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=handjet:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{--<body class="font-sans flex flex-col min-h-svh bg-gradient-to-b from-[#080724] to-[#38376D]">--}}
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
