<x-layout>
    <x-slot name="title">
        Note Details
    </x-slot>

    <div class="container">
        <main>
            <h1>{{ $note->title }}</h1>

            <p class="highlight text-xl my-6">
                {{ $note->about }}
            </p>

            <div class="note-content">
                {{-- Using {!! ... !!} because nl2br returns HTML. e() escapes it first for security. --}}
                <p>{!! nl2br(e($note->content)) !!}</p>
            </div>
            
            <div class="note-footer">
                <div class="meta-data">
                    Created on {{ $note->created_at->format('F j, Y') }}
                </div>

                <div class="actions">
                    <a href="/notes" class="btn">← Back to Notes</a>
                    
                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" 
                                onclick="return confirm('Are you sure you want to delete this note?');">
                            Delete Note
                        </button>
                    </form>
                </div>

            </div>
        </main>
    </div>
</x-layout>