<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('/welcome', fn() => view('welcome'));
Route::post('/', [TodoController::class, 'store']);
Route::put('/todos/{id}', [TodoController::class, 'update'])->name('todos.update');
