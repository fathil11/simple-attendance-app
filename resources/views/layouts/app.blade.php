<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('img/mceasy-favicon.png') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/font/nunito.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-row">
            <x-nav-side/>

            {{-- Content --}}
            <div class="w-6/6 md:w-5/6 bg-gray-100 dark:bg-gray-900 min-h-screen p-4">
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
    </body>
</html>
