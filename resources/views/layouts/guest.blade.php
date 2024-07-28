<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ config('app.name', 'Portofolio Ahay') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    @stack('before-styles')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link href="/node_modules/flowbite/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @stack('after-styles')

</head>

<body class="font-sans antialiased bg-white">
    <div class="min-h-screen bg-white">

        {{-- content --}}
        @include('layouts.navbar')
        {{-- @if (Route::is('admin.dashboard'))
                    {{ $slot }}
                @else --}}
        <div class="bg-white rounded-xl">
            {{ $slot }}
        </div>
        {{-- @endif --}}

        @include('layouts.footer')
    </div>
</body>

@stack('before-scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- @include('alert') --}}
@stack('after-scripts')
@stack('modal')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuButton = document.querySelector('[data-collapse-toggle]');
        const menu = document.getElementById(menuButton.getAttribute('aria-controls'));

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            const expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
            menuButton.setAttribute('aria-expanded', !expanded);
        });
    });
</script>

</html>
