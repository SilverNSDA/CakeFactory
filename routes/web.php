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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){
    return view('HomePage');
});
Route::get('/home',function(){
    return redirect('/');
});
Route::get('/admin','Admin\HomePage@index');

Route::resource('/admin/cakes', 'CakesController');
Route::get('/logout','HomeController@logout');
Route::get('/404',function(){
    return view('404');
});

