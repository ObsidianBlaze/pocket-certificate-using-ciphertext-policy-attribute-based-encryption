<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;


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

//Student
Route::prefix('/student')->group(function () {
    Route::get('/login', [StudentController::class, 'loginView'])->name('student_login');
    Route::get('/register', [StudentController::class, 'registerView'])->name('student_register');
    Route::post('/create', [StudentController::class, 'registerStudent'])->name('create');
    Route::post('/login', [LoginController::class, 'studentLogin'])->name('login_student');


});

