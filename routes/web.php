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


Route::get('/event', function (){
   event(new \App\Events\TaskEvent('working man ok'));

});

Route::get('/listner',function (){
    return view('broadcastlistner');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
