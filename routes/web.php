<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\passport;

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

    // Application form routes
    Route::get('/application', [ApplicationFormController::class, 'application'])->name('application');
    Route::post('/submit', [ApplicationFormController::class, 'submit'])->name('submit');

    // Personal data form routes
    Route::get('/personal-data', [ApplicationFormController::class, 'personalDataForm'])->name('personal-data-form');
    Route::post('/submit-personal-data', [ApplicationFormController::class, 'submitPersonalData'])->name('submit-personal-data');
});
