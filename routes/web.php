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
    return redirect()->route('home.get.welcome');
});

Route::group(['prefix' => 'home'], function (){
    Route::get('/','HomeController@getWelcome')->name('home.get.welcome');
    Route::get('/index','HomeController@getIndex')->name('home.get.index');
    Route::get('/history','HomeController@getHistory')->name('home.get.history');
    /*TODO: Thêm Route lấy tin tức , lấy danh mục tin tức, thể loại*/

    Route::group(['prefix'=>'user'],function (){

        Route::get('/register','HomeController@getRegis')->name('home.get.regis');
        Route::post('/register','HomeController@postRegis')->name('home.post.regis');

        Route::get('/login','HomeController@getLogin')->name('home.get.login');
        Route::post('/login','HomeController@postLogin')->name('home.post.login');

        Route::post('/changepass','HomeController@postChangePass')->name('home.post.changepass');

        Route::get('/info','HomeController@getInfo')->name('home.get.info');
        Route::get('/edit','HomeController@getEdit')->name('home.get.edit');
        Route::post('/edit','HomeController@postEdit')->name('home.post.edit');

        Route::get('/logout','HomeController@getLogout')->name('home.get.logout');
    });
});

//--------------------STUDENT--------------------
Route::group(['prefix' => 'student'], function (){
    Route::get('/','StudentController@getWelcome')->name('student.get.welcome');
    Route::get('/index','StudentController@getIndex')->name('student.get.index');
    /*TODO: Thêm Route lấy tin tức , lấy danh mục tin tức, thể loại*/

    Route::group(['prefix'=>'user'],function (){

        Route::get('/login','StudentController@getLogin')->name('student.get.login');
        Route::post('/login','StudentController@postLogin')->name('student.post.login');

        Route::post('/changepass','StudentController@postChangePass')->name('student.post.changepass');

        Route::get('/info','StudentController@getInfo')->name('student.get.info');
        Route::get('/edit','StudentController@getEdit')->name('student.get.edit');
        Route::post('/edit','StudentController@postEdit')->name('student.post.edit');

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

        Route::group(['prefix' => 'users'],function() {
            Route::get('/index', 'AdminUserController@index')->name('admin.users.index');
            Route::get('/create', 'AdminUserController@create')->name('admin.users.create');
            Route::post('/store', 'AdminUserController@store')->name('admin.users.store');
            Route::get('/{id}/show', 'AdminUserController@show')->name('admin.users.show');
            Route::get('/{id}/edit', 'AdminUserController@edit')->name('admin.users.edit');
            Route::post('/{id}/update', 'AdminUserController@update')->name('admin.users.update');
            Route::get('/delete/{id}','AdminUserController@delete')->name('admin.users.delete');

        });/*group - prefix 'users'*/

        Route::group(['prefix' => 'students'],function() {
            Route::get('/index', 'AdminStudentController@index')->name('admin.students.index');
            Route::get('/create', 'AdminStudentController@create')->name('admin.students.create');
            Route::post('/store', 'AdminStudentController@store')->name('admin.students.store');
            Route::get('/{id}/show', 'AdminStudentController@show')->name('admin.students.show');
            Route::get('/{id}/edit', 'AdminStudentController@edit')->name('admin.students.edit');
            Route::post('/{id}/update', 'AdminStudentController@update')->name('admin.students.update');
            Route::get('/delete/{id}','AdminStudentController@delete')->name('admin.students.delete');

        });/*group - prefix 'students'*/

        Route::group(['prefix' => 'info'],function(){
            Route::post('/change-password','AdminController@postChangePass')->name('admin.info.post.changepass');
            Route::get('/list-admin','AdminController@getListAdmin')->name('admin.info.get.list');
        });/*group - prefix 'info'*/

        Route::group(['prefix'=>'news'],function (){
            Route::get('/index', 'AdminNewController@index')->name('admin.news.index');
            Route::get('/create', 'AdminNewController@create')->name('admin.news.create');
            Route::post('/store', 'AdminNewController@store')->name('admin.news.store');
            Route::get('/{id}/show', 'AdminNewController@show')->name('admin.news.show');
            Route::get('/{id}/edit', 'AdminNewController@edit')->name('admin.news.edit');
            Route::post('/{id}/update', 'AdminNewController@update')->name('admin.news.update');
            Route::get('/delete/{id}','AdminNewController@delete')->name('admin.news.delete');
        });/*group - prefix 'news'*/

    });/*group - middleware 'admin'*/
});/*group - prefix 'admin'*/



Route::get('/clear', function() {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return "View, Cache & Route is cleared";
});
