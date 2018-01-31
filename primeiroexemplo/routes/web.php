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
    // Devolve uma página chamada welcome, localizada em resources/views
    // localizada em resources/views/welcome.blade.php
    return view('saudacao');
});
