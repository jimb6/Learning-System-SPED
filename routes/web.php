<?php

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
    return view('auth/login');
});

Route::get('student/dashboard', function () {
    return view('student/course-view');
})->name('student_dashboard');

Route::group(['prefix' => 'admin'], function() {

    Route::get('registration/teacher', function(){
        return view('admin/teacher_registration');
    })->name('register.teacher');

    Route::get('registration/student', function(){
        return view('auth/register');
    })->name('register.student');

    Route::get('registration/admin', function(){
        return view('admin/admin_registration');
    })->name('register.admin');

    Route::get('registration/account', function(){
        return view('admin/user_account');
    })->name('register.account');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
