<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fata's Notes</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Fata's Notes</h1>
            <a href="/">Home</a>
            <a href="/notes">Notes</a>
            <a href="/notes/create">Create Note</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>