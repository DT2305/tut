<?php

use Illuminate\Support\Facades\Route;

//--------------------HOME--------------------
Route::get('/', function () {
    return redirect()->route('home.get.welcome');
});
Route::group(['prefix' => 'home'], function () {
    Route::get('/', 'HomeController@getWelcome')->name('home.get.welcome');
    Route::get('/index', 'HomeController@getIndex')->name('home.get.index');
    Route::get('/history', 'HomeController@getHistory')->name('home.get.history');
//----------News
    Route::group(['prefix' => 'post'], function () {
        Route::get('/{tit}', 'HomeController@getContent')->name('home.get.content');
        Route::get('category/{cate}', 'HomeController@getCategory')->name('home.get.category');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('/register', 'HomeController@getRegis')->name('home.get.regis');
        Route::post('/register', 'HomeController@postRegis')->name('home.post.regis');
        Route::get('/login', 'HomeController@getLogin')->name('home.get.login');
        Route::post('/login', 'HomeController@postLogin')->name('home.post.login');
        Route::post('/changepass', 'HomeController@postChangePass')->name('home.post.changepass');
        Route::get('/info', 'HomeController@getInfo')->name('home.get.info');
        Route::get('/edit', 'HomeController@getEdit')->name('home.get.edit');
        Route::post('/edit', 'HomeController@postEdit')->name('home.post.edit');
        Route::get('/logout', 'HomeController@getLogout')->name('home.get.logout');
    });
});
//--------------------STUDENT--------------------
Route::group(['prefix' => 'student'], function () {
    Route::get('/', 'StudentController@getWelcome')->name('student.get.welcome');
    Route::get('/index', 'StudentController@getIndex')->name('student.get.index');
    Route::get('/{tit}', 'StudentController@getContent')->name('student.get.content');
    //----------News
    Route::group(['prefix' => 'post'], function () {
        Route::get('/{tit}', 'StudentController@getContent')->name('student.get.content');
        Route::get('category/{cate}', 'StudentController@getCategory')->name('student.get.category');
    });
    /*TODO: Thêm Route lấy tin tức , lấy danh mục tin tức, thể loại*/
    Route::group(['prefix' => 'user'], function () {
        Route::get('/login', 'StudentController@getLogin')->name('student.get.login');
        Route::post('/login', 'StudentController@postLogin')->name('student.post.login');
        Route::post('/changepass', 'StudentController@postChangePass')->name('student.post.changepass');
        Route::get('/info', 'StudentController@getInfo')->name('student.get.info');
        Route::get('/edit', 'StudentController@getEdit')->name('student.get.edit');
        Route::post('/edit', 'StudentController@postEdit')->name('student.post.edit');
        Route::get('/logout', 'StudentController@getLogout')->name('student.get.logout');
    });
});
//--------------------ADMIN--------------------
Route::group(['prefix' => 'admin'], function () {
    //---------- Login Admin
    Route::get('/login', 'AdminController@getLogin')->name('admin.get.login');
    Route::post('/login', 'AdminController@postLogin')->name('admin.post.login');
    //---------- Middleware Admin
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', 'AdminController@index')->name('admin.get.index');
        Route::get('/logout', 'AdminController@getLogout')->name('admin.get.logout');
        Route::post('/change-password', 'AdminController@postChangePass')->name('admin.post.changepass');
        Route::group(['prefix' => 'users'], function () {
            Route::get('/index', 'AdminUserController@index')->name('admin.users.index');
            Route::get('/create', 'AdminUserController@create')->name('admin.users.create');
            Route::post('/store', 'AdminUserController@store')->name('admin.users.store');
            Route::get('/{id}/show', 'AdminUserController@show')->name('admin.users.show');
            Route::get('/{id}/edit', 'AdminUserController@edit')->name('admin.users.edit');
            Route::post('/{id}/update', 'AdminUserController@update')->name('admin.users.update');
            Route::get('/destroy/{id}', 'AdminUserController@destroy')->name('admin.users.destroy');
            //Chuyển ứng viên thành sinh viên
            Route::get('/{id}/move', 'AdminUserController@Move')->name('admin.users.move');
            Route::post('/moved', 'AdminUserController@Moved')->name('admin.users.moved');
        });/*group - prefix 'users'*/
        Route::group(['prefix' => 'departments'], function () {
            Route::get('/index', 'AdminDepartmentController@index')->name('admin.departments.index');
            Route::get('/create', 'AdminDepartmentController@create')->name('admin.departments.create');
            Route::post('/store', 'AdminDepartmentController@store')->name('admin.departments.store');
            Route::get('/{id}/show', 'AdminDepartmentController@show')->name('admin.departments.show');
            Route::get('/{id}/edit', 'AdminDepartmentController@edit')->name('admin.departments.edit');
            Route::post('/{id}/update', 'AdminDepartmentController@update')->name('admin.departments.update');
            Route::get('/destroy/{id}', 'AdminDepartmentController@destroy')->name('admin.departments.destroy');
        });/*group - prefix 'departments'*/
        Route::group(['prefix' => 'faculties'], function () {
            Route::get('/index', 'AdminFacultyController@index')->name('admin.faculties.index');
            Route::get('/create', 'AdminFacultyController@create')->name('admin.faculties.create');
            Route::post('/store', 'AdminFacultyController@store')->name('admin.faculties.store');
            Route::get('/{id}/show', 'AdminFacultyController@show')->name('admin.faculties.show');
            Route::get('/{id}/edit', 'AdminFacultyController@edit')->name('admin.faculties.edit');
            Route::post('/{id}/update', 'AdminFacultyController@update')->name('admin.faculties.update');
            Route::get('/destroy/{id}', 'AdminFacultyController@destroy')->name('admin.faculties.destroy');
        });/*group - prefix 'faculties'*/
        Route::group(['prefix' => 'courses'], function () {
            Route::get('/index', 'AdminCourseController@index')->name('admin.courses.index');
            Route::get('/create', 'AdminCourseController@create')->name('admin.courses.create');
            Route::post('/store', 'AdminCourseController@store')->name('admin.courses.store');
            Route::get('/{id}/show', 'AdminCourseController@show')->name('admin.courses.show');
            Route::get('/{id}/edit', 'AdminCourseController@edit')->name('admin.courses.edit');
            Route::post('/{id}/update', 'AdminCourseController@update')->name('admin.courses.update');
            Route::get('/destroy/{id}', 'AdminCourseController@destroy')->name('admin.courses.destroy');
        });/*group - prefix 'courses'*/
        Route::group(['prefix' => 'students'], function () {
            Route::get('/index', 'AdminStudentController@index')->name('admin.students.index');
            Route::get('/create', 'AdminStudentController@create')->name('admin.students.create');
            Route::post('/store', 'AdminStudentController@store')->name('admin.students.store');
            Route::get('/{id}/show', 'AdminStudentController@show')->name('admin.students.show');
            Route::get('/{id}/edit', 'AdminStudentController@edit')->name('admin.students.edit');
            Route::post('/{id}/update', 'AdminStudentController@update')->name('admin.students.update');
            Route::get('/destroy/{id}', 'AdminStudentController@destroy')->name('admin.students.destroy');
        });/*group - prefix 'students'*/
        Route::group(['prefix' => 'managers'], function () {
            Route::get('/index', 'AdminManagerController@index')->name('admin.managers.index');
            Route::get('/create', 'AdminManagerController@create')->name('admin.managers.create');
            Route::post('/store', 'AdminManagerController@store')->name('admin.managers.store');
            Route::get('/{id}/show', 'AdminManagerController@show')->name('admin.managers.show');
            Route::get('/{id}/edit', 'AdminManagerController@edit')->name('admin.managers.edit');
            Route::post('/{id}/update', 'AdminManagerController@update')->name('admin.managers.update');
            Route::get('/destroy/{id}', 'AdminManagerController@destroy')->name('admin.managers.destroy');
        });/*group - prefix 'managers'*/
        Route::group(['prefix' => 'categories'], function () {
            Route::get('/index', 'AdminCategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'AdminCategoryController@create')->name('admin.categories.create');
            Route::post('/store', 'AdminCategoryController@store')->name('admin.categories.store');
            Route::get('/{id}/show', 'AdminCategoryController@show')->name('admin.categories.show');
            Route::get('/{id}/edit', 'AdminCategoryController@edit')->name('admin.categories.edit');
            Route::post('/{id}/update', 'AdminCategoryController@update')->name('admin.categories.update');
            Route::get('/destroy/{id}', 'AdminCategoryController@destroy')->name('admin.categories.destroy');
        });/*group - prefix 'categories'*/
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/index', 'AdminPostController@index')->name('admin.posts.index');
            Route::get('/create', 'AdminPostController@create')->name('admin.posts.create');
            Route::post('/store', 'AdminPostController@store')->name('admin.posts.store');
            Route::get('/{id}/show', 'AdminPostController@show')->name('admin.posts.show');
            Route::get('/{id}/edit', 'AdminPostController@edit')->name('admin.posts.edit');
            Route::post('/{id}/update', 'AdminPostController@update')->name('admin.posts.update');
            Route::get('/destroy/{id}', 'AdminPostController@destroy')->name('admin.posts.destroy');
        });/*group - prefix 'news'*/
    });/*group - middleware 'admin'*/
});/*group - prefix 'admin'*/


Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return "View, Cache & Route is cleared";
});
