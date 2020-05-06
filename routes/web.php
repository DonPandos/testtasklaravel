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

Route::group(['middleware' => 'auth'], function () {          // auth ( web ) - для обычных смертных
    Route::get('/', 'IndexController@index')->name('home');  // возвращает  вьюху для авторизованого юзера
});

// Admin part
Route::prefix('admin')->middleware('auth:admin')->group(function () { // auth:admin - для админов
    Route::get('/', 'AdminController@index')->name('admin.home');  // возвращает  вьюху для авторизованого админа
});

// Admin part
Route::prefix('admin')->middleware('guest:admin')->group(function () {     // гард "админ" гостевой
  Route::get('/login',  'Auth\AdminLoginController@showLoginForm')->name('admin.login');           // форма для авторизации админов
  Route::post('/login', 'Auth\AdminLoginController@login'        )->name('admin.login.submit');    // действие - авторизация админа
});
