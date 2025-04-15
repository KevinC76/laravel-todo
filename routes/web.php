<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('welcome'));

Route::resource('todos', TodoController::class)->only(['index', 'store', 'update']);
