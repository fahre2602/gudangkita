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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('barangs', 'BarangController') ;

Route::get('/', "BarangController@index") ;
Route::get('/edit/{id}', "BarangController@edit") ; 
Route::get('/show/{id}', "BarangController@show") ;
Route::get('/create', "BarangController@create") ;
Route::post('/store', "BarangController@store") ;
Route::post('/update/{id}', "BarangController@update") ;
Route::get('/delete/{id}', "BarangController@destroy") ;