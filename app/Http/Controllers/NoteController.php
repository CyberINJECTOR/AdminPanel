<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function getAllNotes() {
        $notes = Note::all();
        return $notes;
    }

    public function insertNote(Request $request) {
        $newNote = Note::create($request->all());
        print($newNote);
        return $newNote;
    }
}
