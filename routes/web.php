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


Route::namespace('App\Http\Controllers\front')->group(function () {

    Route::get('/', 'HomePageController@index')->name('front.homepage');

    Route::get('/category/{id}', 'CourseController@index')->name('front.category');

    Route::get('/category/{id}/course/{course_id}', 'CourseController@course_details')->name('front.course_details');

    Route::get('/contact', 'ContactController@index')->name('front.contact');

    Route::post('/message/newsletter', 'FormsController@newsletter')->name('front.forms.newsletter');

    Route::post('/message/contact', 'FormsController@contact')->name('front.forms.contact');

    Route::post('/course/enroll', 'FormsController@enroll')->name('front.forms.enroll');
});


Route::namespace('App\Http\Controllers\admin')->group(function () {

    Route::get('/dashboard/login', 'AuthController@login')->name('admin.login');
    Route::post('/dashboard/do-login', 'AuthController@doLogin')->name('admin.doLogin');


    route::middleware('adminAuth')->group(function () {
        Route::get('/dashboard', 'HomeController@index')->name('admin.home');
        Route::get('/dashboard/logout', 'AuthController@logout')->name('admin.logout');
    });
});
