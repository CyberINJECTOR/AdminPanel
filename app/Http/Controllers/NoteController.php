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

    public function updateNote(Request $request) {
        $oldNote = Note::find($request->input('id'));
        $oldNote->entity = $request->input('entity');
        $oldNote->id = $request->input('id');
        $oldNote->value = $request->input('value');
        $oldNote->save();
        return 'noteUpdated';
    }

    public function deleteNote(Request $request) {
        $oldNote = Note::find($request->input('id'));
        $oldNote->delete();
    }
}
