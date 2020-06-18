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




// Route::get('/coba', function () {
//     return view('ex');
// });

Route::get('/getKecamatan','DataController@getKecamatan');
Route::get('/getKelurahan','DataController@getKelurahan');


Route::get('/cari','DataController@cari');

// Route::post('create','DataController@getKecamatan')
// 	->name('create.getKecamatan');
// Route::post('datakel','DataController@getKelurahan')
// 	->name('datakel.getKelurahan');


Route::get('/create-pallete','IndexController@createPallette');
Route::resource('/data','DataController');
// Route::resource('/','IndexController');
Route::get('/','IndexController@peta');
Route::get('/getData','IndexController@getData');
Route::get('/getPositif','IndexController@getPositif');
Route::post('/search','IndexController@search');
// Route::post('/data', 'DataController@postData')
//     ->name('data.store');



