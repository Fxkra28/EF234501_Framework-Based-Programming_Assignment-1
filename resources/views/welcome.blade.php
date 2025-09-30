<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fata's Notes</title>

    {{-- Added Google Fonts to match your site's theme --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body class="bg-navy text-gray-200 font-mono">
    <main class="flex min-h-screen flex-col items-center justify-center p-8 text-center">
        {{-- Styled the H1 to use your custom theme color --}}
        <h1 class="text-4xl font-normal text-highlight-cyan">Welcome to Fata's Notes</h1>
        <p class="mt-2 text-lg">Click the button below to start.</p>

        <a href="/notes" class="btn mt-6 inline-block">
         Make A New Note
        </a>

        <footer class="mt-10 text-sm text-gray-400 below-1/4">
            &copy; {{ now()->year }} Fata's Notes. All rights reserved.
        </footer>
    </main>
</body>
</html>