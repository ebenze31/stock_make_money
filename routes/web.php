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

// ROLE
// admin-super
// admin
// host-member
// host-co-member
// member
// general


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/terms_of_service', function () {
    return view('terms_of_service');
});

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});

Auth::routes();

// Login general
Route::middleware(['auth'])->group(function () {

    // Login general
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/business_create', 'BusinessController@create');
    Route::resource('business', 'BusinessController')->except(['index','show']);

});

// admin-super
Route::middleware(['role:admin-super'])->group(function () {
    Route::resource('business_category', 'Business_categoryController');
    Route::resource('business_sub_category', 'Business_sub_categoryController');
});

// host-member
Route::middleware(['role:admin-super,admin,host-member'])->group(function () {
    // 
});

// host-co-member
Route::middleware(['role:admin-super,admin,host-member,host-co-member'])->group(function () {
    Route::get('/business/{id}/edit', 'BusinessController@create');
});

// member
Route::middleware(['role:admin-super,admin,host-member,host-co-member,member'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});