<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->where('id', '[0-9]+')->name('tasks.edit');
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->where('id', '[0-9]+')->name('tasks.update');
    Route::patch('/tasks/{id}', [TaskController::class, 'update'])->where('id', '[0-9]+')->name('tasks.update');
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->where('id', '[0-9]+')->name('tasks.destroy');
});
