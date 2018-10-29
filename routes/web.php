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
Route::get('/jenis-rambu/edit/{id}','RambuController@jenis_rambu_edit')
->name('jenis-rambu-edit');
Route::put('/jenis-rambu/edit/{id}','RambuController@jenis_rambu_update')
->name('jenis-rambu-update');
Route::get('/jenis-rambu/hapus/{id}','RambuController@jenis_rambu_hapus')
->name('jenis-rambu-hapus');



// kecamatan
Route::get('/lokasi/kecamatan', 'LokasiController@kecamatan_index')
->name('kecamatan-index');
Route::POST('/lokasi/kecamatan','LokasiController@kecamatan_tambah')
->name('tambah-kecamatan');
Route::get('/lokasi/kecamatan/{id}','LokasiController@kecamatan_detail')
->name('kecamatan-detail');
Route::get('/lokasi/kecamatan/edit/{id}','LokasiController@kecamatan_edit')
->name('kecamatan-edit');
Route::put('/lokasi/kecamatan/edit/{id}','LokasiController@kecamatan_update')
->name('kecamatan-update');
Route::get('/lokasi/kecamatan/hapus/{id}','LokasiController@kecamatan_hapus')
->name('kecamatan-hapus');


// kelurahan
Route::get('/lokasi/kelurahan', 'LokasiController@kelurahan_index')
->name('kelurahan-index');
Route::POST('/lokasi/kelurahan','LokasiController@kelurahan_tambah')
->name('tambah-kelurahan');
Route::get('/lokasi/kelurahan/{id}','LokasiController@kelurahan_detail')
->name('kelurahan-detail');
Route::post('/lokasi/kelurahan/update/{id}','LokasiController@kelurahan_update')
->name('kelurahan-update');
Route::get('/lokasi/kelurahan/hapus/{id}','LokasiController@kelurahan_hapus')
->name('kelurahan-hapus');

//titik rambu terpasang
Route::get('/lokasi/rambu_terpasang', 'LokasiController@rambu_terpasang_index')
->name('rambu-terpasang-index');
Route::get('/lokasi/rambu_terpasang/tambah', 'LokasiController@rambu_terpasang_tambah')
->name('rambu-terpasang-tambah');
Route::POST('/lokasi/rambu_terpasang/tambah', 'LokasiController@rambu_terpasang_store')
->name('rambu-terpasang-store');

//kebutuhan rambu
Route::get('/lokasi/kebutuhan_rambu', 'LokasiController@kebutuhan_rambu_index')
->name('rambu-terpasang-index');
Route::get('/lokasi/kebutuhan_rambu/tambah', 'LokasiController@kebutuhan_rambu_tambah')
->name('rambu-terpasang-tambah');
Route::POST('/lokasi/kebutuhan_rambu/store', 'LokasiController@rambu_terpasang_store')
->name('rambu-terpasang-store');