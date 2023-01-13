<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\HomepageController;




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
//Home page
Route::get('/', [HomepageController::class, 'homeView'])->name('home_page');

//Student
Route::prefix('/student')->group(function () {
    Route::get('/login', [StudentController::class, 'loginView'])->name('student_login');
    Route::get('/register', [StudentController::class, 'registerView'])->name('student_register');
    Route::post('/create', [StudentController::class, 'registerStudent'])->name('create');
    Route::post('/login', [LoginController::class, 'studentLogin'])->name('login_student');

});

//Admin
Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, 'loginView'])->name('admin_login');
//    Route::get('/register', [AdminController::class, 'registerView'])->name('admin_register');
//    Route::post('/create', [AdminController::class, 'registerAdmin'])->name('create');
//    Route::post('/login', [LoginController::class, 'adminLogin'])->name('login_admin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('login_admin');
    Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('logout_admin');




});

//Route::group(['middleware' => 'adminauth'], function () {
//    Route::get('/', function () {
//        return view('welcome');
//    })->name('adminDashboard');
//
//});
