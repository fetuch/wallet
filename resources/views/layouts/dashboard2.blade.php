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
        <div class="flex-1 relative bg-gray-50">
            @include('layouts.shared.navbar')

            <!-- Breadcrumb -->
            @include('layouts.dashboard.breadcrumbs')

            <!-- Page Heading -->
            <header class="relative py-6 lg:py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-600">
                        {{ $header }}
                    </h1>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="flex">
                            <aside class="hidden lg:block lg:w-1/5 py-6 border-r">
                                @include('layouts.dashboard.nav')
                            </aside>

                            <div class="w-full py-6 px-4 sm:p-6 lg:pb-8">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @include('layouts.shared.footer')
    </body>
</html>
