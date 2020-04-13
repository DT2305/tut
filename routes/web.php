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

//Route::get('/', function () {
//    return view('welcome');
//});


//--------------------HOME--------------------
Route::get('/', function (){
    return redirect()->route('home.get.index');
});

Route::group(['prefix' => 'home'], function (){
    Route::get('/','HomeController@getIndex')->name('home.get.index');
    /*TODO: Thêm Route lấy tin tức , lấy danh mục tin tức, thể loại*/

    Route::group(['prefix'=>'user'],function (){

        Route::get('/register','HomeController@getRegis')->name('home.get.regis');
        Route::post('/register','HomeController@postRegis')->name('home.post.regis');

        Route::get('/login','HomeController@getLogin')->name('home.get.login');
        Route::post('/login','HomeController@postLogin')->name('home.post.login');

        Route::post('/changepass','HomeController@postChangePass')->name('home.post.changepass');

        Route::get('/edit','HomeController@getEdit')->name('home.get.edit');
        Route::post('/edit','HomeController@postEdit')->name('home.post.edit');

        Route::get('/logout','HomeController@getLogout')->name('home.get.logout');
    });
});

//--------------------STUDENT--------------------
Route::group(['prefix' => 'student'], function (){
    Route::get('/','StudentController@getIndex')->name('student.get.index');
    /*TODO: Thêm Route lấy tin tức , lấy danh mục tin tức, thể loại*/

    Route::group(['prefix'=>'user'],function (){

        Route::get('/login','StudentController@getLogin')->name('student.get.login');
        Route::post('/login','StudentController@postLogin')->name('student.post.login');

        Route::post('/changepass','StudentController@postChangePass')->name('student.post.changepass');

        /*TODO: Thêm Route chỉnh sửa thông tin người dùng*/

        Route::get('/logout','StudentController@getLogout')->name('student.get.logout');
    });
});

//--------------------ADMIN--------------------
Route::group(['prefix' => 'admin'], function(){
    //---------- Login Admin
    Route::get('/login','AdminController@getLogin')->name('admin.get.login');
    Route::post('/login','AdminController@postLogin')->name('admin.post.login');

    //---------- Middleware Admin
    Route::group(['middleware' => 'admin'],function (){
        Route::get('/','AdminController@getIndex')->name('admin.get.index');
        Route::post('/','AdminController@postIndex')->name('admin.post.index');
        Route::get('/logout','AdminController@getLogout')->name('admin.get.logout');
    });

});

//----------test giao diệm----------
//admin
Route::view('admin-sample','admin.admin-sample');
Route::view('admin-login','admin.other.login');
Route::view('admin-index','admin.other.index');
Route::view('admin-table-sample','admin.admin-table-sample');
//home
Route::view('home-register','home.other.regis');
Route::view('home-login','home.other.login');
//Route::view('home-login2','home.other.login-v2');
Route::view('home-index','home.index');
//student
Route::view('student-login','student.other.login');
Route::view('student-index','student.index');

