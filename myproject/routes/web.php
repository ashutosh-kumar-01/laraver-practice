<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\SendEmail;
use App\Http\Controllers\SendFileController;
use App\Http\Controllers\CookieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check-db', function() {
    // in this DB means DB is Laravel’s database manager/facade.
    // It provides methods for:- connecting to databases

    DB::connection()->getMongoClient();

    return "MongoDB Connected Successfully";
});



// crud route
Route::get('/insert', [StudentController::class, 'insert']);
Route::get('/read', [StudentController::class, 'read']);
Route::get('/update/{id}', [StudentController::class, 'update']);
Route::get('/delete/{id}', [StudentController::class, 'delete']);



// api route
Route::get('/get-quotes',[APIController::class, 'fetch']);


// Form Validation Route
Route::get('/student-form', [StudentFormController::class, 'showForm']);
Route::post('/student-submit', [StudentFormController::class, 'submitForm']);

// send email route
// Route::get('/send-mail', [SendEmail::class, 'send']);
Route::post('/send-mail', [SendEmail::class, 'sendMail']);
Route::get('/mail-form', [SendEmail::class, 'showMailForm']);



// send file route
// File Uploading Route
Route::get('/upload', function () {
    return view('SendFile');
});
Route::post('/upload', [SendFileController::class, 'upload']);


// cookie
Route::get('/cookie', [CookieController::class, 'index']);

Route::get('/set-cookie', [CookieController::class, 'setCookie']);

Route::get('/get-cookie', [CookieController::class, 'getCookie']);

Route::get('/delete-cookie', [CookieController::class, 'deleteCookie']);