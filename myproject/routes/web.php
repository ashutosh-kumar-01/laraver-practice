<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\SendEmail;
use App\Http\Controllers\SendFileController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\DataRetrival;
use App\Http\Controllers\Emailtwo;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\groceryshop;
use App\Http\Controllers\University;

use App\Http\Controllers\FormStore;

Route::get('/student-form', [FormStore::class, 'create']);
Route::post('/student-store', [FormStore::class, 'store']);























Route::get('/showdata', [FormStore::class, 'showdata']);