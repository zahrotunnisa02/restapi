<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');
});

// Auth::routes();
// Route::redirect('/', '/login');
// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('home', [HomeController::class, 'index'])->name('home');
// Route::get('profile', ProfileController::class)->name('profile');
// Route::resource('employees', EmployeeController::class);
Route::middleware(['auth'])->group(function () {
    // Route Home
    Route::get('home', [HomeController::class,'index'])->name('home');
    // Route Profile
    Route::get('profile', ProfileController::class)->name('profile');
    // Employee
    Route::resource('employees', EmployeeController::class);
});
Auth::routes();

