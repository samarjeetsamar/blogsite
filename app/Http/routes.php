<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
//pages controller 
Route::get('/home', 'HomeController@index');

Route::get('/aboutus', 'PagesController@aboutUs');

Route::get('/contact', 'PagesController@contactForm');

//admin controller 
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/pages', 'AdminController@pages');