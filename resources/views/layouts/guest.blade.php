<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Diário do Motorista') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
            style=" background-image:var(--principal-gradiente)">
            <div style="text-align: center;">
                <a href="/">
                    <x-application-logo class="variavel-clara"/>
                </a>
                <p style="color: var(--text-2)">Controle financeiro para motoristas de app</p>
            </div>

            <div class="bg-[var(--bg-card)] border border-[var(--border)] rounded-[var(--r-lg)] p-[36px_32px] shadow-[var(--shadow-lg)]">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
