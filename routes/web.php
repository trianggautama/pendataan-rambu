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
    return view('auth/login');
})->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'],function(){

Route::get('/index', 'HomeController@index')
->name('dashboard');

// rambu
Route::get('/rambu/', 'adminController@rambu_index')
->name('rambu-index');
Route::POST('/rambu/','adminController@rambu_tambah')
->name('tambah-rambu');
Route::get('/rambu/detail/{id}','adminController@rambu_detail')
->name('rambu-detail');
Route::put('/rambu/detail/{id}','adminController@rambu_update')
->name('rambu-update');
Route::get('/rambu/hapus/{id}','adminController@rambu_hapus')
->name('rambu-hapus');
Route::get('/laporan/rambu','adminController@laporan_rambu')
->name('laporan-rambu');
Route::get('/laporan/rambu-detail/{id}','adminController@laporan_rambu_detail')
->name('laporan-rambu-detail');


//jenis rambu
Route::get('/jenis-rambu/', 'adminController@jenis_rambu_index')
->name('jenis-rambu-index');
Route::POST('/jenis-rambu/','adminController@jenis_rambu_tambah')
->name('tambah-jenis-rambu');
Route::get('/jenis-rambu/detail/{id}','adminController@jenis_rambu_detail')
->name('jenis-rambu-detail');
Route::get('/jenis-rambu/edit/{id}','adminController@jenis_rambu_edit')
->name('jenis-rambu-edit');
Route::put('/jenis-rambu/edit/{id}','adminController@jenis_rambu_update')
->name('jenis-rambu-update');
Route::get('/jenis-rambu/hapus/{id}','adminController@jenis_rambu_hapus')
->name('jenis-rambu-hapus');



// kecamatan
Route::get('/lokasi/kecamatan', 'adminController@kecamatan_index')
->name('kecamatan-index');
Route::POST('/lokasi/kecamatan','adminController@kecamatan_tambah')
->name('tambah-kecamatan');
Route::get('/lokasi/kecamatan/{id}','adminController@kecamatan_detail')
->name('kecamatan-detail');
Route::get('/lokasi/kecamatan/edit/{id}','adminController@kecamatan_edit')
->name('kecamatan-edit');
Route::put('/lokasi/kecamatan/edit/{id}','adminController@kecamatan_update')
->name('kecamatan-update');
Route::get('/lokasi/kecamatan/hapus/{id}','adminController@kecamatan_hapus')
->name('kecamatan-hapus');


// kelurahan
Route::get('/lokasi/kelurahan', 'adminController@kelurahan_index')
->name('kelurahan-index');
Route::POST('/lokasi/kelurahan','adminController@kelurahan_tambah')
->name('tambah-kelurahan');
Route::get('/lokasi/kelurahan/{id}','adminController@kelurahan_detail')
->name('kelurahan-detail');
Route::post('/lokasi/kelurahan/update/{id}','adminController@kelurahan_update')
->name('kelurahan-update');
Route::get('/lokasi/kelurahan/hapus/{id}','adminController@kelurahan_hapus')
->name('kelurahan-hapus');
Route::get('/laporan/kelurahan','adminController@laporan_kelurahan')
->name('laporan-kelurahan');

//titik rambu terpasang
Route::get('/lokasi/rambu_terpasang', 'adminController@rambu_terpasang_index')
->name('rambu-terpasang-index');
Route::get('/lokasi/rambu_terpasang/tambah', 'adminController@rambu_terpasang_tambah')
->name('rambu-terpasang-tambah');
Route::POST('/lokasi/rambu_terpasang/tambah', 'adminController@rambu_terpasang_store')
->name('rambu-terpasang-store');
Route::get('/lokasi/rambu_terpasang/ubah/{id}', 'adminController@rambu_terpasang_ubah_status')
->name('rambu-terpasang-ubah');
Route::get('/lokasi/rambu_terpasang/detail/{id}', 'adminController@rambu_terpasang_detail')
->name('rambu-terpasang-detail');
Route::get('/lokasi/rambu_terpasang/edit/{id}', 'adminController@rambu_terpasang_edit')
->name('rambu-terpasang-edit');
Route::put('/lokasi/rambu_terpasang/edit/{id}','adminController@rambu_terpasang_update')
->name('rambu-terpasang-update');
Route::get('/lokasi/rambu_terpasang/hapus/{id}','adminController@lokasi_rambu_hapus')
->name('lokasi-rambu-hapus');
Route::get('/laporan/rambu_terpasang','adminController@laporan_rambu_terpasang')
->name('laporan-rambu-terpasang');


//kebutuhan rambu

Route::get('/lokasi/kebutuhan_rambu/api', 'adminController@kebutuhan_rambu_api')
->name('kebutuhan-rambu-api');
Route::get('/lokasi/kebutuhan_rambu', 'adminController@kebutuhan_rambu_index')
->name('kebutuhan-rambu-index');
Route::get('/lokasi/kebutuhan_rambu/tambah', 'adminController@kebutuhan_rambu_tambah')
->name('kebutuhan-rambu-tambah');
Route::POST('/lokasi/kebutuhan_rambu/tambah', 'adminController@kebutuhan_rambu_store')
->name('kebutuhan-rambu-store');
Route::get('/lokasi/kebutuhan_rambu/ubah/{id}', 'adminController@kebutuhan_rambu_ubah')
->name('kebutuhan-rambu-ubah');
Route::get('/lokasi/kebutuhan_rambu/edit/{id}', 'adminController@kebutuhan_rambu_edit')
->name('kebutuhan-rambu-edit');
Route::get('/lokasi/kebutuhan_rambu/detail/{id}', 'adminController@kebutuhan_rambu_detail')
->name('kebutuhan-rambu-detail');
Route::get('/laporan/kebutuhan_rambu','adminController@laporan_kebutuhan_rambu')
->name('laporan-kebutuhan-rambu');
Route::get('/laporan/kebutuhan_rambu_detail/{id}','adminController@laporan_kebutuhan_rambu_detail')
->name('laporan-kebutuhan-rambu-detail');

//pejabbat strutural
Route::get('/pejabat-struktural', 'HomeController@pejabat_struktural_index')
->name('pejabat-struktural-index');
Route::POST('/pejabat-struktural', 'HomeController@pejabat_struktural_tambah')
->name('pejabat-struktural-tambah');
Route::get('/pejabat-struktural/edit/{id}', 'HomeController@pejabat_struktural_edit')
->name('pejabat-struktural-edit');
Route::put('/pejabat-struktural/edit/{id}', 'HomeController@pejabat_struktural_update')
->name('pejabat-struktural-update');
Route::get('/pejabat-struktural/hapus/{id}', 'HomeController@pejabat_struktural_hapus')
->name('pejabat-struktural-hapus');



});