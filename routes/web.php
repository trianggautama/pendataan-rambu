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
})->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// rambu
Route::get('/rambu/', 'RambuController@rambu_index')
->name('rambu-index');
Route::POST('/rambu/','RambuController@rambu_tambah')
->name('tambah-rambu');
Route::get('/rambu/detail/{id}','RambuController@rambu_detail')
->name('rambu-detail');
Route::put('/rambu/detail/{id}','RambuController@rambu_update')
->name('rambu-update');
Route::get('/rambu/hapus/{id}','RambuController@rambu_hapus')
->name('rambu-hapus');


//jenis rambu
Route::get('/jenis-rambu/', 'RambuController@jenis_rambu_index')
->name('jenis-rambu-index');
Route::POST('/jenis-rambu/','RambuController@jenis_rambu_tambah')
->name('tambah-jenis-rambu');
Route::get('/jenis-rambu/detail/{id}','RambuController@jenis_rambu_detail')
->name('jenis-rambu-detail');
Route::post('/jenis-rambu/update/{id}','RambuController@jenis_rambu_update')
->name('jenis-rambu-update');
Route::get('/jenis-rambu/hapus/{id}','RambuController@jenis_rambu_hapus')
->name('jenis-rambu-hapus');


