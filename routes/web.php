<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify'=>true]);

Route::middleware(['auth','verified'])->group(function () {
    Route::resource('tasks',TaskController::class);
});
