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
// member
// general


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cms', function () {
    return view('layouts.theme_cms');
});

Auth::routes();

// Login general
Route::middleware(['auth'])->group(function () {

    // Login general
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

});

// admin-super
Route::middleware(['role:admin-super'])->group(function () {
    // Route::resource('/covid19','Covid19Controller');
});

// member
Route::middleware(['role:admin-super,admin,host-member,member'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

});
