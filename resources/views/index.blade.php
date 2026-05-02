<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        @fluxAppearance
    </head>
    <body class="antialiased font-sans bg-white dark:bg-zinc-900 min-h-screen">
        <flux:main container class="py-12 text-center">
            <flux:heading size="xl">{{ config('app.name') }}</flux:heading>
            <flux:subheading class="mt-2">{{ __('Welcome.') }}</flux:subheading>
        </flux:main>

        @fluxScripts
    </body>
</html>
