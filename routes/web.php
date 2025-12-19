<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animals')->name('animals.')->group(function () {
    Route::get('/creer', [AnimalController::class, 'create'])->name('create');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('show');
    Route::get('/modifier/{id}', [AnimalController::class, 'edit'])->name('edit');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('delete');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
