<?php

use Illuminate\Support\Facades\Route;

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

Route::get('first_step', function() {
	// my first laravel program
	return "Hello World!";
});

Route::get('/name', function(){
	// View that returns my name
	return view('name');
});

// It's just for third commit command