<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::orderBy('created_at', 'desc')->get();
        return view('notes.index', compact('notes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        Note::create($validatedData);

        return redirect()->route('notes.index')->with('success', 'Note berhasil dibuat.');
    }

    public function edit(Note $note)
    {
        return response()->json($note);
    }

    public function update(Request $request, Note $note)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $note->update($validatedData);

        return redirect()->route('notes.index')->with('success', 'Note berhasil diperbarui.');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note berhasil dihapus.');
    }
}
