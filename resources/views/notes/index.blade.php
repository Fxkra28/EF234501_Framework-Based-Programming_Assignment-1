<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fat's Notes</title>
</head>
<body>

<header>
    <h1>Fat's Notes</h1>
    <p>Here you can manage your notes.</p>
</header>

<hr>

<main>
    <section>
        <h2>Add New Note</h2>
        <form action="/notes" method="POST">
            <div>
                <label for="note-title">Title:</label>
                <br>
                <input type="text" id="note-title" name="title" required>
            </div>
            <br>
            <div>
                <label for="note-content">Content:</label>
                <br>
                <textarea id="note-content" name="content" rows="5" required></textarea>
            </div>
            <br>
            <button type="submit">Save Note</button>
        </form>
    </section>

    <hr>

    <!-- List of existing notes -->
    <section>
        <h2>Your Notes</h2>
        <ul>
            @foreach ($notes as $note)
                <li>
                    <h3>{{ $note['title'] }}</h3>
                    <p>{{ $note['content'] }}</p>
                    <a href="/notes/{{ $note['id'] }}">View Note</a>
                </li>
            @endforeach
        </ul>
    </section>
</main>

</body>
</html>