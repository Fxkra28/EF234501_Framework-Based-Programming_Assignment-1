<x-layout>
    <x-slot name="title">
        Note Details
    </x-slot>

    <h1>Note Details</h1>
    <p>Showing details for note ID: {{ $id }}</p>
    <h2>{{ $notes_detail->title }}</h2>
    <p>{{ $notes_detail->content }}</p>
</x-layout>