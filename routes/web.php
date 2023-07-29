<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\OtherDataController;
use App\Http\Controllers\Step5DataController;
use App\Http\Controllers\DocumentUploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['web'])->group(function () {
    // Your routes here

    Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
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

    // Passport application routes
    Route::get('/passport-application', [PassportController::class, 'application'])->name('passport-application');
    Route::post('/submit-passport', [PassportController::class, 'submit'])->name('submit-passport');

    // Other Data form routes
Route::get('/other-data', [OtherDataController::class, 'otherDataForm'])->name('other-data-form');
Route::post('/submit-other-data', [OtherDataController::class, 'submitOtherData'])->name('submit-other-data');

   // step5data routes
   Route::get('/step5-data', [Step5DataController::class, 'index'])->name('step5-data');
Route::post('/submit-step5-data', [Step5DataController::class, 'submitStep5Data'])->name('submit-step5-data');

//alert message

Route::get('/alert_message', [Step5DataController::class, 'alert_message'])->name('alert_message');


//document upload form
Route::get('/document-upload', [DocumentUploadController::class, 'documentUploadForm'])->name('document-upload-form');
Route::post('/submit-document-upload', [DocumentUploadController::class, 'submitDocumentUpload'])->name('submit-document-upload');

});
