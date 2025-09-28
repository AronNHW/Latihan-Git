<?php

use Illuminate\Support\Facades\Route;

// Route for the main landing page
Route::get('/', function () {
    return view('beranda');
});

// Route for the dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route for division page
Route::get('/divisi', function () {
    return view('divisi');
});

// Route for profile page
Route::get('/profil', function () {
    return view('profil');
});

// Route for news page
use App\Http\Controllers\NewsController;
Route::get('/berita', [NewsController::class, 'publicIndex'])->name('berita.public');

// Route for registration page
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Route for student achievements page
Route::get('/prestasi-mahasiswa', function () {
    return view('prestasi_mahasiswa');
});

// Route for suggestion box page
Route::get('/kontak-aspirasi', function () {
    return view('kontak_aspirasi');
});

// Route for news management page
Route::get('/manajemen-berita', [NewsController::class, 'index'])->name('news.manage');

// Placeholder login route
// In a real application, this would be handled by Laravel's authentication system
Route::get('/login', function () {
    // For now, let's redirect to the dashboard as a placeholder
    return view('dashboard');
})->name('login');

// Resource route for Aspirations
use App\Http\Controllers\AspirationController;
Route::resource('aspirations', AspirationController::class);

// Resource route for News actions
Route::resource('news', NewsController::class);