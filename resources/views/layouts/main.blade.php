<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PrimePix</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="dark:bg-gray-900 dark:text-white">
    @livewire('navbar')
    @yield('content')
    @livewireScripts
</body>
</html>
