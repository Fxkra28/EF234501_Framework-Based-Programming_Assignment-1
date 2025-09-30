<x-layout>
    <div class="container">
        <main>
            <section>
                <h2>Add New Note</h2>
                <form action="{{ route('notes.store') }}" method="POST">
                    @csrf

                    {{-- Title Field --}}
                    <div class="form-group mb-4">
                        <label for="note-title">Title:</label>
                        <input type="text" id="note-title" name="title" value="{{ old('title') }}" required class="form-control">
                        @error('title')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- About Field --}}
                    <div class="form-group mb-4">
                        <label for="note-about">About:</label>
                        <textarea id="note-about" name="about" rows="2" required class="form-control">{{ old('about') }}</textarea>
                        @error('about')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Content Field --}}
                    <div class="form-group mb-4">
                        <label for="note-content">Content:</label>
                        <textarea id="note-content" name="content" rows="5" required class="form-control">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- User Assignment Dropdown --}}
                    <div class="form-group mb-4">
                        <label for="user_id">Author:</label>
                        <select name="user_id" id="user_id" required class="form-control">
                            <option value="">Select an author...</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <button type="submit" class="btn">Save Note</button>
                    </div>
                </form>

                    @if ($errors->any())
                    <div class="px-4 py-3 mt-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded" role="alert">
                        <strong class="font-bold">Oops! Ada beberapa masalah:</strong>
                        <ul class="list-disc pl-5 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </section>
        </main>
    </div>
</x-layout>