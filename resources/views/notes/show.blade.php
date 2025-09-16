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
                <p>{!! nl2br(e($note->content)) !!}</p>
            </div>
          

            <div class="note-footer">
                <div class="meta-data">
                    Created on {{ $note->created_at->format('F j, Y') }}
                </div>
                <a href="/notes" class="btn">← Back to Notes</a>
            </div>
        </main>
    </div>
</x-layout>