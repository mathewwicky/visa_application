<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ApplicationFormController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['web'])->group(function () {
    // Your routes here

    Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register', [CustomAuthController::class, 'register'])->name('register');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/logout', [CustomAuthController::class, 'logout']);
//Route::get('/application', [ApplicationFormController::class, 'application']);
//Route::post('/submit', [ApplicationFormController::class, 'submit'])->name('submit');
Route::get('/application', [ApplicationFormController::class, 'application']);
Route::post('/submit', [ApplicationFormController::class, 'submit'])->name('submit');
});

