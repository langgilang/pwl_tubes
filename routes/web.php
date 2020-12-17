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
    return view('layouts.master');  
});

// GURU
Route::get('/dataguru', 'DataGuruController@index')->name('dataguru');
Route::get('/dataguru/tambah', 'DataGuruController@create');

// SISWA
Route::get('/datasiswa', 'DataSiswaController@index');


// MATA PELAJARAN
Route::get('/datamapel', 'DataMapelController@index');

// NILAI
Route::get('/datanilai', 'DataNilaiController@index');

// ABSENSI 
Route::get('/dataabsensi', 'DataAbsensiController@index');

