<?php

use Illuminate\Support\Facades\Route;

// Posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);