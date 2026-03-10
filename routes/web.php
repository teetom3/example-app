<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'creer'])->name('articles.creer');
    Route::get('/modifier/{id}', [ArticleController::class, 'modifier'])->name('articles.modifier');
    Route::get('/supprimer/{id}', [ArticleController::class, 'supprimer'])->name('articles.supprimer');
    Route::get('/{id}', [IndexController::class, 'show'])->name('article.details');
});

Route::fallback(function () {
    return view('errors.not-found');
});
