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

//How not to do
Route::get('/articles', function () {
    return "Articles Showing";
});

Route::get('/hello/b/section', function () {
    return "<h2>Hello My B Section</h2>";
});
Route::get('/api', function () {
    $products = ['car'=>'2018'];

    return $products;
});

Route::get('users/{id}/files', function ($id) {
    return $id;
});

