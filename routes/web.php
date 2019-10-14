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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('index');
});

Route::get('/login', 'FrontController@index');
Route::post('/login/auth', 'FrontController@loginAuth');

Route::get('/admin', 'AdminController@index');
Route::post('/admin/{idFutsal}', 'AdminController@detailFutsal');
Route::get('/admin/logout', 'AdminController@logout');


