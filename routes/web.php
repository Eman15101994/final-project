<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ArticleController;
use  App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/emaschool', function () {
    return view('emaweb');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/addstudent', function () {
    return view('students/add');
});
use App\Http\Controllers\StudentController;
Route::get('/addstudent',[StudentController::class,"addstudent"]);

Route::post('/savestudent',[StudentController::class,"savestudent"]);

Route::get("/students/stview",[StudentController::class,"stview"])->name("students.stview");


Route::get("/students/{students}",[StudentController::class,"show"])->name("students.show");

Route::delete("/students/{students}",[StudentController::class,"destoty"])->name("students.destory");

Route::get("/students/edit/{students}",[StudentController::class,"edit"])->name("students.edit");

Route::put("/students/update/{students}",[StudentController::class,"update"])->name("students.update");

//Route::post('/submitstudent', function () {
    //return ('students submitted');
   //dump($_POST);
//});
Route::get('/students', function () {
    $students=["fatma","sara","maria","ghada","nada","marwa","doha","doaa","gehad"];
    return view('allstudents',["students"=>$students]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("/articles",ArticleController::class);
Route::get('/user/articles/{user}', [UserController::class, 'getArticles'])->name('user.articles');