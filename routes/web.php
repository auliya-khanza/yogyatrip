<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registration web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//utama user
Route::get('/', function () {
    return view('dashboard');
});

//utama admin
Route::get('/admin', function () {
    return view('/admin/dashboard');
});

//auth
Route::get('login', 'LoginUser@login');
Route::get('admins', 'LoginUser@admins');
Route::post('loginPost', 'LoginUser@loginPost'); 
Route::get('register', 'LoginUser@register');
Route::post('/registerPost', 'LoginUser@registerPost'); 
Route::get('dashboard', 'LoginUser@dashboard'); 
Route::get('logout', 'LoginUser@logout');

//admin obyek wisata
Route::get('/admin/objek_wisata', 'Viewcontroller@indexAdmin');
Route::get('/objek_wisata/tambah','Viewcontroller@tambah');
Route::post('/objek_wisata/submit','Viewcontroller@submit');
Route::get('/objek_wisata/edit/{id}','Viewcontroller@edit');
Route::post('/objek_wisata/update','Viewcontroller@update');
Route::get('/objek_wisata/hapus/{id}','Viewcontroller@hapus');
Route::get('/objek_wisata/lihat/{id}','Viewcontroller@lihatAdmin');
Route::get('/objek_wisata/cari','Viewcontroller@cari');

//admin pemasukan
Route::get('/admin/pemasukan', 'PemasukanController@index');
Route::get('/pemasukan/tambah','PemasukanController@tambah');
Route::post('/pemasukan/submit','PemasukanController@submit');
Route::get('/pemasukan/edit/{id}','PemasukanController@edit');
Route::post('/pemasukan/update','PemasukanController@update');
Route::get('/pemasukan/hapus/{id}','PemasukanController@hapus');
Route::get('/pemasukan/lihat/{id}','PemasukanController@lihat');

//admin tiket
Route::get('/admin/tiket', 'TiketController@index');
Route::get('/tiket/tambah','TiketController@tambah');
Route::post('/tiket/submit','TiketController@submit');
Route::get('/tiket/hapus/{id}','TiketController@hapus');
Route::get('/tiket/edit/{id}','TiketController@edit');
Route::post('/tiket/update','TiketController@update');

//admin statistik
Route::get('/admin/statistik', 'ChartController@lihatPemasukan');

//user obyek wisata
Route::get('/user/objek_wisata', 'Viewcontroller@indexUser');
Route::get('/user/objek_wisata/lihat/{id}','Viewcontroller@lihatUser');
Route::get('/user/objek_wisata/beli/{id}','Viewcontroller@lihatDetailTiket');
