<?php

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
