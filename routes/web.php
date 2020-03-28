<?php

use Illuminate\Support\Facades\Route;

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
//----------test giao diệm----------
//admin
Route::view('admin-sample','admin.admin-sample');
Route::view('admin-login','admin.other.login');
Route::view('admin-index','admin.other.index');
Route::view('admin-table-sample','admin.admin-table-sample');
//home
Route::view('home-login','home.other.login');
Route::view('home-index','home.index');
//student
Route::view('student-login','student.other.login');
Route::view('student-index','student.index');

