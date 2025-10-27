<?php

use App\Models\Testimony;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonyController;

Route::get('/', function () {
    return view('index');
});

Route::get('/social', function () {
    return view('social');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/testimonies', [TestimonyController::class, 'index'])->name('testimonies');