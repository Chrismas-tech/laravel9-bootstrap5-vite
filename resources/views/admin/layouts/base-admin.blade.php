<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-light">
    @include('admin.layouts.navigation-menu')
    @include('admin.layouts.header')
    <!-- Page Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    @stack('modals')
    @livewireScripts
</body>

</html>