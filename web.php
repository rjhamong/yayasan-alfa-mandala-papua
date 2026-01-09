<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;

/*
|--------------------------------------------------------------------------
| ROUTE PUBLIK
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('home'))->name('home');

Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/kontak', fn () => view('kontak'))->name('kontak');

/*
|--------------------------------------------------------------------------
| SITEMAP
|--------------------------------------------------------------------------
*/
Route::get('/sitemap.xml', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'text/xml');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

/*
|--------------------------------------------------------------------------
| AUTH (LOGIN, LOGOUT)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
