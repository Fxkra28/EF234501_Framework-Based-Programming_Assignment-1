<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', function () {
    $notes = [
        ["title" => "Note 1", "about" => "This is the first note", "id" => 1],
        ["title" => "Note 2", "about" => "This is the second note.", "id" => 2],
        ["title" => "Note 3", "about" => "This is the third note.", "id" => 3]
    ];
    return view('notes.index', ["greeting" => "Ini punyanya Fata ya!!", "notes" => $notes]);
});

Route::get('/notes/create', function () {
    return view('notes.create');
});     


Route::get('/notes/{id}', function ($id) {
    $notes = [
        [ "title" => "First Note","content" => "This is a brief description of my first note. It's a placeholder for more detailed thoughts.","id" => 1],
        [ "title" => "Project Ideas", "content" => "Brainstorming new project ideas: 1. A simple to-do list app. 2. A personal blog. 3. A recipe collection website.", "id" => 2],
        ["title" => "Shopping List","content" => "1. Milk, 2. Bread, 3. Eggs, 4. Coffee", "id" => 3]
    ];

    $note = collect($notes)->firstWhere('id', $id);
    
    if (!$note){
        abort(404);
    }
    
    return view('notes.show', ['notes_detail' => (object)$note, 'id' => $id]);
});



