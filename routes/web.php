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
Route::get('/','customer_side\HomePage@index');
Route::get('/home',function(){
    return redirect('/');
});
Route::get('/admin','Admin\HomePage@home');
Route::get('/admin/home','Admin\Homepage@index');

Route::resource('/admin/cakes', 'CakesController');
Route::resource('/admin/chefs', 'ChefsController');
Route::resource('/admin/categories', 'CategoryController');
Route::resource('/cart','CartController');
Route::get('/cakes/{id}','CustomerController@show');
// Route::resource('/admin/user', 'UserController');
Route::get('/logout','HomeController@logout');
Route::get('/404',function(){
    return view('404');
});
Route::delete('/cart/user/{id}/delete','CartController@clearCart');
