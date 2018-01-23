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
    return view('home');
});


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/mldemo', function () {
    return view('viewcase');
});

Route::get('/mldemo1', function () {
    return view('viewcase1');
});


Route::get('/mldemo2/{id}','NewCon@mtest1');

Route::get('/mldemo21','NewCon@mtest12');
