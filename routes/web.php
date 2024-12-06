<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/notes', function () {
    return view('notes.index');
})->name('note.note');
