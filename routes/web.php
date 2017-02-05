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
    return view('index');
  });
Route::get('login', array('uses' => 'BroadcastController@show'));
Route::post('login', array('uses' => 'BroadcastController@generate'));
//Route::get('successful', array('uses' => 'BroadcastController@success'));


    // process the form here

    // create the validation rules ------------------------
