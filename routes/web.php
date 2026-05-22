<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;

// Question 4 : Routes publiques
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/articles', [MainController::class, 'articles'])->name('articles.index');
Route::get('/articles/{slug}', [MainController::class, 'article'])->name('articles.show');
Route::get('/categories', [MainController::class, 'categories'])->name('categories.index');
Route::get('/about', [MainController::class, 'about'])->name('about');

// Question 5 : Groupe de routes dashboard
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/articles', [DashboardController::class, 'articles'])->name('articles');
    Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
    Route::get('/utilisateurs', [DashboardController::class, 'users'])->name('users');
    Route::get('/commentaires', [DashboardController::class, 'comments'])->name('comments');
    Route::get('/reglages', [DashboardController::class, 'settings'])->name('settings');
});
