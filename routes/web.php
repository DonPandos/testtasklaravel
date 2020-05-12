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
  if(Auth::check()) return view('home');
  return view('auth.login');
});

Route::get('/form', function() {
  return view('form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/forms', 'HomeController@admin')->middleware('admin')->name('admin-forms');

Route::get('/form/submit', 'FormController@submit')->name('form-submit');

Route::get('/admin/forms/article', 'HomeController@article')->middleware('admin')->name('article-form');
Route::get('/admin/forms/article/submit', 'FormController@articlesubmit')->middleware('admin')->name('articleform-submit');

Route::get('/admin', 'HomeController@adminmenu')->middleware('admin')->name('adminmenu');
Route::get('/main', function(){
  return view('mainpage');
});
