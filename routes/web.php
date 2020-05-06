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
    return view('welcome');
});

Route::get('/form', function() {
  return view('form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
   Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');
   Route::get('/register/admin', 'Auth\RegisterController@showAdminRegpisterForm');
   Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm');

   Route::post('/login/admin', 'Auth\LoginController@adminLogin');
   Route::post('/login/user', 'Auth\LoginController@userLogin');
   Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
   Route::post('/register/user', 'Auth\RegisterController@createUser');

   Route::view('/home', 'home')->middleware('auth');
   Route::view('/admin', 'admin');
   Route::view('/user', 'user');
