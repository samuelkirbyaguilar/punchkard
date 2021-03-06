<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->

        <!-- Alpine -->
        <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireScripts
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <x-nav.navbar />

            <!-- Page Content -->
            <main class="px-48">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
