<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FormStore;
use App\Http\Controllers\productController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\SendEmail;
use App\Http\Controllers\SendFileController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\DataRetrival;
use App\Http\Controllers\Emailtwo;
// use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\University;
use App\Http\Controllers\groceryshop;
// use App\Http\Controllers\CollegeStudentController;


Route::get('/showdataa', [productController::class, 'index']);



Route::get('/student-form', [FormStore::class, 'create']);
Route::post('/student-store', [FormStore::class, 'store']);
Route::get('/showdata', [FormStore::class, 'showdata']);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/check-db', function() {
//     // in this DB means DB is Laravel’s database manager/facade.
//     // It provides methods for:- connecting to databases

//     DB::connection()->getMongoClient();

//     return "MongoDB Connected Successfully";
// });



// // crud route
// Route::get('/insert', [StudentController::class, 'insert']);
// Route::get('/read', [StudentController::class, 'read']);
// Route::get('/update/{id}', [StudentController::class, 'update']);
// Route::get('/delete/{id}', [StudentController::class, 'delete']);



// // api route
// Route::get('/get-quotes',[APIController::class, 'fetch']);


// // Form Validation Route
// Route::get('/student-form', [StudentFormController::class, 'showForm']);
// Route::post('/submit-form', [StudentFormController::class, 'submitForm']);

// send email route
// Route::get('/send-mail', [SendEmail::class, 'send']);
Route::post('/send-mail', [SendEmail::class, 'sendMail']);
Route::get('/mail-form', [SendEmail::class, 'showMailForm']);



// // send file route
// // File Uploading Route
// Route::get('/upload', function () {
//     return view('SendFile');
// });
// Route::post('/upload', [SendFileController::class, 'upload']);


// // cookie
// Route::get('/cookie', [CookieController::class, 'index']);
// Route::get('/set-cookie', [CookieController::class, 'setCookie']);
// Route::get('/get-cookie', [CookieController::class, 'getCookie']);
// Route::get('/delete-cookie', [CookieController::class, 'deleteCookie']);


// // unit 4
// // data retrival
// // Data Retrival
// Route::post('/dataretrival', [DataRetrival::class, 'store']);
// Route::get('/form', function () {
//     return view('DataRetrival');
// });




// // Cookie
// Route::get('/set-cookie', function(){
//     return response("Cookie Set")->cookie('user', 'Amit', 60);
// });
// Route::get('/get-cookie', function(Request $request){
//     return $request->cookie('user');
//     // return "Cookie value: " . $request->cookie('user');
// });
// Route::get('/delete-cookie', function(){
//     return response("Cookie Deleted")->cookie('user', null, -1);
// });


// // Session
// Route::get('/set-session', function (Request $request) {
//     $request->session()->put('user', 'Amit');
//     return "Session Stored";
// });
// Route::get('/get-session', function (Request $request) {
//     return $request->session()->get('user');
// });
// Route::get('/delete-session', function (Request $request) {
//     $request->session()->forget('user');
//     return "Session Deleted";
// });


// // send mail 2
// // Emsil Sending Route
// Route::get('/send-mail', [Emailtwo::class, 'send']);



// // lang route
// Route::get('/locall', function () {
//     return view('hindilang');
// });

// // Group Middleware
// Route::middleware('ageGroup')->group(function() {
//     Route::get('/one', function() {
//         return "This is first Group Middleware";
//     });
//     Route::get('/two', function() {
//         return "This is second Group Middleware";
//     });
// });

// // Route Middleware
// Route::get('/b', function() {
//     return ("Hello From Route middleware");
// })->middleware("ageCheck");



// // restfull resource route
// Route::resource('products', ProductController::class);

// // Named Route
// // Route::get('/home1/home2/home3', function(){
// //     return view('home');
// // })->name('home');



// // Types of Routing 

// // Named Route
// //  -->home.blade.php
// Route::get('/home', function(){
//     return view('home');
// });

// // about.blade.php
// Route::get('/about1/about2/about3', function() {
//     return view('about');
// });
// // contact.blade.php
// Route::get('/contact1/contact2/contact3', function() {
//     return view('contact');
// })->name('cont');


// //Route Prefixing
// Route::prefix('admin')->group(function () {

//     Route::get('/dashboard', function () {
//         return "Admin Dashboard";
//     });

//     Route::get('/users', function () {
//         return "Admin Users";
//     });

// }); 




// // unit 2 

// // routing paramenters
// Route::get('/user/{id}', function ($id) {
//     return $id;
// });

// // mulitple parameters
// Route::get('/post/{post}/comment/{comment}', function ($post, $comment) {
//     return "Post: $post, Comment: $comment";
// });



// // attaching header \
// // And browser/network tab will contain header:
// Route::get('/test-header', function () {

//     return response("Header Attached Successfully")
//             ->header('X-Test', 'Laravel12');

// });


// // json response
// Route::get('/json-response', function () {

//     return response()->json([
//         'name' => 'Aman',
//         'course' => 'Laravel',
//         'version' => 12
//     ]);

// });

// // another example


Route::get('/student2', function () {
    $students = [
        [
            'name' => 'Aman',
            'rollno' => 101,
            'marks' => 85
        ],
        [
            'name' => 'Rahul',
            'rollno' => 102,
            'marks' => 90
        ],
        [
            'name' => 'Simran',
            'rollno' => 103,
            'marks' => 95
        ]
    ];
    return response()->json($students);
});

// // redirecting routes
// Route::get('/fun', function () {
//     return "Home Page";
// });

// Route::get('/redirect', function () {
//     return redirect('/fun');
// });


// // passing data to the view
// Route::get('/student', function () {

//     $name = "Aman";
//     $rollno = 101;
//     $marks = 85;

//     return view('passingdatatotheview', compact('name', 'rollno', 'marks'));

// });


// // Attaching Headers
// Route::get('/header', function() {
//     return response('Hello')
//     ->header('Content-Type', 'text/plain');
// });


// // unit 3
// // secure route
// Route::get('/login', function () {
//     return "Login Page";
// })->name('login');

// Route::get('/dashboard', function () {
//     return "Welcome to Dashboard";
// })->middleware('auth');


// // Route Groups
// Route::prefix('admin')->group(function () {

//     Route::get('/dashboard', function () {
//         return "Admin Dashboard";
//     });

//     Route::get('/users', function () {
//         return "Admin Users";
//     });

// });



// // Domain Routing
// //Domain Routing
// Route::domain('admin.localhost')->group(function () { 
//     // http://admin.localhost:8000 --> for checking
//     Route::get('/ab', function () {
//         return "Admin Panel";
//     });
// });

// // Open
// // C:\Windows\System32\drivers\etc\hosts
// // Add this line:
// // 127.0.0.1 admin.localhost

// // to get current URL
// use Illuminate\Support\Facades\URL;

// Route::get('/test1', function () {
//     return URL::current();
// });

// Route::get('/component', function () {
//     return view('component');
// })->name('component');

// Route::get('/test2', function () {
//     return route('component');
// });

// Route::get('/user/{id}', function ($id) {
//     return "User ID: " . $id;
// });

// Route::get('/test3', function () {
//     return url('/home');
// });


// // Asset URL
// Route::get('/asset', function() {
//     return view('AssetUrl');
// });








// // data show on the view from mysql database using model and controller
// Route::get('/groceryshop', [groceryshop::class, 'getitems']);


// // get all data from mongodb 
// Route::get('/get-info',[University::class, 'index']);

// // form that store data in mongodb



// // to show data in view from mongodb database using model and controller

// // query builder crud operations
// use App\Http\Controllers\CollegeStudentController;

// Route::get('/students', [CollegeStudentController::class, 'index']);

// Route::get('/students/create', [CollegeStudentController::class, 'create']);

// Route::get('/students/update/{id}', [CollegeStudentController::class, 'update']);

// Route::get('/students/delete/{id}', [CollegeStudentController::class, 'delete']);
