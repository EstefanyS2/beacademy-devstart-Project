<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    FilmeController,

};

Route::get('/', function () {
    return view('welcome');
});

Route::delete('/filmes/{id}', [FilmeController::class, 'destroy'])->name('filmes.destroy');
Route::put('/filmes/{id}', [FilmeController::class, 'update'])->name('filmes.update');
Route::get('/filmes/{id}/edit', [FilmeController::class, 'edit'])->name('filmes.edit');
Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes.index');
Route::get('/filmes/create', [FilmeController::class, 'create'])->name('filmes.create');
Route::post('/filmes', [FilmeController::class, 'store'])->name('filmes.store');
Route::get('/filmes/{id}', [FilmeController::class, 'show'])->name('filmes.show');


Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

require __DIR__.'/auth.php';
