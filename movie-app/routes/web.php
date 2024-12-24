<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About Page']);
});

Route::get('/myProject', function () {
    return view('myProject', ['title' => 'My Project']);
});

// Route::get('/dashboard', function() {
//     return view('dashboard', ['title' => 'Dashboard']);
// });

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::controller(GoogleController::class)->group(function() {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
