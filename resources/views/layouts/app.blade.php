<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Real Estate Admin Dashboard' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-100 text-slate-900 antialiased">
        <div class="flex min-h-screen overflow-hidden">
            @include('components.sidebar')

            <div data-sidebar-overlay class="fixed inset-0 z-30 hidden bg-slate-950/40 lg:hidden"></div>

            <div class="flex min-h-screen flex-1 flex-col lg:pl-72">
                @include('components.navbar')

                <main class="flex-1 overflow-y-auto px-4 py-6 sm:px-6 lg:px-8">
                    @yield('content')
                </main>

                @include('components.footer')
            </div>
        </div>
    </body>
</html>
