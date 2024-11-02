<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->where('id', '[0-9]+')->name('tasks.edit');
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->where('id', '[0-9]+')->name('tasks.update');
    Route::patch('/tasks/{id}', [TaskController::class, 'update'])->where('id', '[0-9]+')->name('tasks.update');
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->where('id', '[0-9]+')->name('tasks.destroy');
});




