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
Route::get('/products', function () {
    return App\Product::paginate(1);
});

Route::get('/', function () {
    return view('index');
});
Route::get('/section/c', function () {
    return "<p>Hello My Lovely class</p>";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
