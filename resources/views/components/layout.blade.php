<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fata's Notes</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif
    <header>
        <nav>
            <h1>Fata's Notes</h1>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('notes.index') }}">Notes</a>
            <a href="{{ route('notes.create') }}">Create Note</a>  
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
    <footer class="text-center p-4 mt-8 border-t border-gray-700">
        &copy; {{ now()->year }} Fata's Notes. All rights reserved.
    </footer>
</body>
</html>