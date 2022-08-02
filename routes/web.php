<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::view('', 'home')->name('home');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');    
});

