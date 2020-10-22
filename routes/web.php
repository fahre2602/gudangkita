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

Route::resource('mobils', 'MobilController') ;

Route::get('/', "MobilController@index") ;
Route::get('/edit/{id}', "MobilController@edit") ; 
Route::get('/show/{id}', "MobilController@show") ;
Route::get('/create', "MobilController@create") ;
Route::post('/store', "MobilController@store") ;
Route::post('/update/{id}', "MobilController@update") ;
Route::get('/delete/{id}', "MobilController@destroy") ;

Route::resource('penjualans', 'PenjualanController') ;

Route::get('/penjualans', "PenjualanController@index") ;
Route::get('/penjualan/edit/{id}', "PenjualanController@edit") ; 
Route::get('/penjualan/show/{id}', "PenjualanController@show") ;
Route::get('/penjualan/create', "PenjualanController@create") ;
Route::post('/penjualan/store', "PenjualanController@store") ;
Route::post('/penjualan/update/{id}', "PenjualanController@update") ;
Route::get('/penjualan/delete/{id}', "PenjualanController@destroy") ;
Route::get('/penjualan/rekap', "PenjualanController@rekap") ; 