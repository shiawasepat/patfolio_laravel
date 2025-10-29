<?php

use App\Models\Testimony;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonyController;

Route::get('/', function () {
    return view('index');
});

Route::get('/social', function () {
    return view('social');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', [PortfolioController::class, 'home'])->name('home');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

Route::get('/testimonies', [TestimonyController::class, 'index'])->name('testimonies');
