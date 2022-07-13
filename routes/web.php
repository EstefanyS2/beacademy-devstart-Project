<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes.index');
Route::get('/filmes/{id}', [FilmeController::class, 'show'])->name('fimes show');
