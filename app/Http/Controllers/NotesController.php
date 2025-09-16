<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Notes::orderBy('created_at', 'desc')->paginate(10);
        return view('notes.index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function show($id)
   {
    $note = Notes::findOrFail($id);
    return view('notes.show', ['note' => $note]);
    }

    public function edit($id)
    {
        $note = Notes::findOrFail($id);
        return view('notes.edit', ['note' => $note]);
    }

    public function store(Request $request) {
        // Logic to store the note
    }
    public function update(Request $request, $id) {
        // Logic to update the note
    }
    public function destroy($id) {
        // Logic to delete the note
    }

    public function search(Request $request) {
        $query = $request->input('query');
        // Logic to search notes based on the query
        return view('notes.search', ['query' => $query]);
    }


}
