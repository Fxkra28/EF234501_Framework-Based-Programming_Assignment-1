

<x-layout>
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

    <section>
        <h2>Your Notes</h2>
        <ul>
            @foreach ($notes as $note)
                <li>
                    <x-card href="/notes/{{ $note['id'] }}" :highlight="$note['id'] % 2 === 0">
                        <h3>{{ $note['title'] }}</h3>
                        <p>{{ $note['content'] }}</p>
                        <a href="/notes/{{ $note['id'] }}">View Note</a>
                    </x-card>
                </li>
            @endforeach
        </ul>
    </section>
</main>
</x-layout>