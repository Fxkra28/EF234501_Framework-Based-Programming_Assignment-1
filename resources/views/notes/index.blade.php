<x-layout>
    <div class="container">
        <main>
            <section>
                <h2>Add New Note</h2>
                <form action="{{ route('notes.store') }}" method="POST">
                    @csrf {{--SOON --}}

                    <div>
                        <label for="note-title">Title:</label>
                        <input type="text" id="note-title" name="title" required>
                    </div>

                    <div>
                        <label for="note-content">Content:</label>
                        <textarea id="note-content" name="content" rows="5" required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn">Save Note</button>
                    </div>
                </form>
            </section>

            <hr class="my-12 border-blue-900">

            <section>
                <h2>Your Notes</h2>
                <ul class="list-none p-0">
                    @foreach ($notes as $note)
                        <li class="my-4">
                          
                            <x-card>
                                <div class="card-title">
                                    <h3>{{ $note['title'] }}</h3>
                                </div>
                                <div class="card-content">
                                    <div class="card-actions">
                                        <a href="{{ route('notes.show', $note['id']) }}" class="btn">View Note</a>
                                    </div>
                                </div>
                            </x-card>
                        </li>
                    @endforeach
                </ul>
            </section>
        </main>
    </div>

    {{ $notes->links() }}{{-- Pagination links --}}
</x-layout>