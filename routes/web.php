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


// SISWA
Route::get('/datasiswa', 'DataSiswaController@index');
Route::get('/datasiswa/add', 'DataSiswaController@add');
Route::get('/datasiswa/cetak_pdf', 'DataSiswaController@cetak_pdf');
Route::get('/datasiswa/edit/{id}', 'DataSiswaController@edit');
Route::get('/datasiswa/delete/{id}', 'DataSiswaController@delete');
Route::post('/datasiswa/update/{id}', 'DataSiswaController@update');
Route::post('/datasiswa/create', 'DataSiswaController@create');

// NILAI
Route::get('/datanilai', 'DataNilaiController@index');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
