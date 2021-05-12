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

        <livewire:styles />
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="font-sans antialiased">
        <div
            x-data="{ offCanvasMenu: false, slideOverlay: false }"
            class="h-screen flex overflow-hidden bg-gray-100"
        >
            @include('layouts.dashboard.off-canvas-menu')

            <!-- Static sidebar for desktop -->
            @include('layouts.dashboard.static-sidebar')

            <div class="flex-1 overflow-auto focus:outline-none" tabindex="0">
                <div class="relative flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
                    <button
                        @click="offCanvasMenu = true"
                        class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
                        <span class="sr-only">Open sidebar</span>
                        <!-- Heroicon name: outline/menu-alt-1 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </button>

                    <!-- Bar -->
                    <div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                        <!-- Search bar -->
                        <div class="flex-1 flex">
                            <form class="w-full flex md:ml-0" action="#" method="GET">
                                <label for="search_field" class="sr-only">Search</label>
                                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" aria-hidden="true">
                                        <!-- Heroicon name: solid/search -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input id="search_field" name="search_field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search">
                                </div>
                            </form>
                        </div>

                        <div class="ml-4 flex items-center md:ml-6">
                            <!-- Notifications -->
                            <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            @include('layouts.shared.profile-dropdown')
                        </div>
                    </div>
                </div>

                <main class="flex-1 pb-8 z-0 overflow-y-auto">
                    @include('layouts.dashboard.header')

                    <div class="mt-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="flex items-center space-x-4">
                                <li>
                                    <div>
                                        <a href="#" class="text-gray-400 hover:text-gray-500">
                                            <!-- Heroicon name: solid/home -->
                                            <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                            </svg>
                                            <span class="sr-only">Home</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                        </svg>
                                        <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Investments</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                        </svg>
                                        <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Transactions</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                        </svg>
                                        <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">Create</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div class="mt-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        <livewire:notification />

        <livewire:scripts />
    </body>
</html>
