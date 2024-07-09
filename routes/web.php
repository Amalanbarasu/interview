<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Redirect the root URL to the login page
Route::get('/', function () {
    return redirect('/login');
});

// Authentication routes
Auth::routes();

// Home route
Route::get('/home', [DashboardController::class, 'index'])->name('home')->middleware('auth');
