<?php

use App\Http\Controllers\CuitController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('cuits', [CuitController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('cuits');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
