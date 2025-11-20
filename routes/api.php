<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/api/posts', [App\Http\Controllers\PostController::class, 'indexApi']);

Route::get('/api/testimonies', [App\Http\Controllers\TestimonyController::class, 'index']);