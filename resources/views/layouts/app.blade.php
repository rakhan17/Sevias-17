<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Task Routes
Route::resource('tasks', TaskController::class);

// Note Routes
Route::resource('notes', NoteController::class);
