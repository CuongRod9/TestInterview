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
Route::get('/array','TestInterview@array');
Route::get('/string','TestInterview@string');
Route::get('/randomArray','TestInterview@randArray');
Route::get('/webSecurity',function(){
   return view('webSecurity'); 
});