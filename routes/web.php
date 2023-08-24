<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/ 

Route::get('/','firstpageController@Firstpage')->name('Firstpage');
Route::get('public','PublicController@public')->name('Public.user');
Route::get('home','FrontEndController@homepage')->name('home');
Route::get('login','LoginController@login')->name('login');
Route::post('do-Login','LoginController@dologin')->name('do.login');

Route::get('create-user','FrontEndController@create')->name('create.user');
Route::post('save','FrontEndController@save')->name('save.user');

Route::get('edit-user/{id}','FrontEndController@edit')->name('edit.user');
Route::post('update-user','FrontEndController@update')->name('update.user');
Route::get('delete-user/{id}','FrontEndController@delete')->name('delete.user');





