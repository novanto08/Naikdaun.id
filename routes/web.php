<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;

// route home
Route::get('/', [HomeController::class, 'index'])->name('home');

// route about
Route::get('/about', [AboutController::class, 'index'])->name('about');

// route works
Route::prefix('works')->group(function () {
    Route::get('/', [WorkController::class, 'index'])->name('works');
    Route::get('/{slug}', [WorkController::class, 'detail'])->name('works.detail');
});

// route fallback jika request tidak ada pada route
Route::fallback(function () {
    return abort(404);
});
