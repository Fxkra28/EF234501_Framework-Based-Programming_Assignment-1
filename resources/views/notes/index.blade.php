<x-layout>
    <div class="container">
        <main>
            <section>
                <h2>Your Notes</h2>
                <ul class="list-none p-0">
                    @foreach ($notes as $note)
                        <li class="my-4">
                            
                            <x-card>
                                <div class="card-title">
                                    <h3>{{ $note->title }}</h3>

                                    {{-- ADDED: Display the author's name --}}
                                    <p class="text-sm">
                                        <p>By: {{ $note->userNotes->name }}</p>
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-actions">
                                        {{-- Use object syntax for the ID as well --}}
                                        <a href="{{ route('notes.show', $note->id) }}" class="btn">View Note</a>
                                    </div>
                                </div>
                            </x-card>
                        </li>
                    @endforeach
                </ul>
            </section>
        </main>
    </div>

    {{-- The pagination links will work correctly with the Eloquent collection --}}
    {{ $notes->links('pagination::bootstrap-4') }}
</x-layout>