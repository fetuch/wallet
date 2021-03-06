<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="flex flex-col font-sans antialiased">
        <div class="flex-1 relative">
            @include('layouts.shared.navbar')

            {{ $hero ?? '' }}

            <!-- Page Content -->
            <main class="">
                {{ $slot }}
            </main>
        </div>

        @include('layouts.shared.footer')
    </body>
</html>
