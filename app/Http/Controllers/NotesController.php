<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;
use App\Models\UserNotes;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Notes::with('userNotes')->orderBy('created_at', 'desc')->paginate(10);
        return view('notes.index', ['notes' => $notes]);
    }

    public function create()
    {
        $users = UserNotes::all();
        return view('notes.create', ['users' => $users]);
    }

    public function show(Notes $notes)
    {
        return view('notes.show', ['note' => $notes]);
    }

    public function edit(Notes $notes)
    {
        return view('notes.edit', ['note' => $notes]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required|exists:user_notes,id',
        ]);
        Notes::create($validated);
        return redirect()->route('notes.index')->with('success', 'Note created successfully');
    }
    public function update(Request $request, $id) {
        $note = Notes::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required|exists:user_notes,id',
        ]);
        $note->update($validated);
        return redirect()->route('notes.index')->with('success', 'Note updated successfully');
    }
    public function destroy(Notes $notes) {
        $notes->delete();
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully');
    }

    public function search(Request $request) {
        $query = $request->input('query');
        // Logic to search notes based on the query
        return view('notes.search', ['query' => $query]);
    }


}
