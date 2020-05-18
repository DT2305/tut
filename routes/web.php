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

            Route::get('/list', 'AdminUserController@getList')->name('admin.users.get.list');

            Route::get('/create', 'AdminUserController@getCreate')->name('admin.users.get.create');
            Route::post('/create', 'AdminUserController@postCreate')->name('admin.users.post.create');

            Route::get('/edit/{id}', 'AdminUserController@getEdit')->name('admin.users.get.edit');
            Route::post('/edit/{id}', 'AdminUserController@postEdit')->name('admin.users.post.edit');

            Route::get('/delete/{id}','AdminUserController@getDelete')->name('admin.users.get.delete');

        });/*group - prefix 'users'*/

        Route::group(['prefix' => 'students'],function() {

            Route::get('/list', 'AdminStudentController@getList')->name('admin.students.get.list');

            Route::get('/create', 'AdminStudentController@getCreate')->name('admin.students.get.create');
            Route::post('/create', 'AdminStudentController@postCreate')->name('admin.students.post.create');

            Route::get('/edit/{id}', 'AdminStudentController@getEdit')->name('admin.students.get.edit');
            Route::post('/edit/{id}', 'AdminStudentController@postEdit')->name('admin.students.post.edit');

            Route::get('/delete/{id}','AdminStudentController@getDelete')->name('admin.students.get.delete');

        });/*group - prefix 'students'*/

        Route::group(['prefix' => 'info'],function(){
            Route::post('/change-password','AdminController@postChangePass')->name('admin.info.post.changepass');

            Route::get('/list-admin','AdminController@getListAdmin')->name('admin.info.get.list');


        });/*group - prefix 'info'*/

    });/*group - middleware 'admin'*/
});/*group - prefix 'admin'*/

//----------test giao diện mới----------
Route::view('home-sample','home.sample');
Route::view('home-login','home.others.login');
Route::view('home-register','home.others.register');
Route::view('home-home','home.index');
Route::view('home-welcome','home.welcome');
Route::view('home-edit','home.edit');

Route::get('/view-cache', function() {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return "View & Cache is cleared";
});
////----------test giao diện----------
//admin
Route::view('admin-sample','admin.admin-sample');
Route::view('admin-login','admin.other.login');
Route::view('admin-index','admin.other.index');
Route::view('admin-table-sample','admin.admin-table-sample');
////home
//Route::view('home-register','home.other.regis');
//Route::view('home-login','home.other.login');
////Route::view('home-login2','home.other.login-v2');
//Route::view('home-index','home.index');
//Route::view('home_jik','home.just_in_case.saction');
////student
//Route::view('student-login','student.other.login');
//Route::view('student-index','student.index');

