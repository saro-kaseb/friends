<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('settings', 'settings')
    ->middleware(['auth'])
    ->name('settings');

Route::get('my-profile', [UserController::class, 'myProfile'])
    ->middleware(['auth', 'verified'])
    ->name('my-profile');

Route::get('profile', [UserController::class, 'profile'])
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::get('posts', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('posts');

require __DIR__.'/auth.php';
