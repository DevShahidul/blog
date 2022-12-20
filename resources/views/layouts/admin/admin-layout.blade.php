<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}" :data-mode=" isDark ? 'dark': 'light' ">
            <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
              <!-- Loading screen -->
                <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-darker">
                    Loading.....
                </div>
                <x-sidebar.sidebar />

                <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
                    <x-header.navbar />
                    <main>
                        <!-- Content header -->
                        @if (isset($header))
                            <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
                                {{ $header }}
                            </div>
                        @endif
                        {{ $slot }}
                    </main>
                </div>
                <x-admin.setting-panel />
                <x-admin.notification-panel />
                <x-admin.search-panel />
            </div>
        </div>
    </body>
</html>