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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "<h1>Halo, Selamat datang</h1>";
});

Route::get('blog2', function () {
    return view('blog2');
});

Route::get('5026221086', function () {
    return view('5026221086');
});

Route::get('ets', function () {
    return view('ets');
});

Route::get('buttons', function () {
    return view('buttons');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('link', function () {
    return view('link');
});

Route::get('news', function () {
    return view('news');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('style', function () {
    return view('style');
});

Route::get('validasi1', function () {
    return view('validasi1');
});


Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@showNama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

// route CRUD
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');

// add
Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store', 'App\Http\Controllers\PegawaiController@store');

// update
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

// delete
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

// cari
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

// view
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


// ROUTE CRUD nilaikuliah
Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliahController@index');

Route::get('/nilaikuliah/tambah', 'App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store', 'App\Http\Controllers\NilaiKuliahController@store');

// ROUTE CRUD kertashvs TUGAS PRA EAS
Route::get('/kertashvs', 'App\Http\Controllers\KertasHVSController@index');

// add
Route::get('/kertashvs/tambah', 'App\Http\Controllers\KertasHVSController@tambah');
Route::post('/kertashvs/store', 'App\Http\Controllers\KertasHVSController@store');

// update
Route::get('/kertashvs/edit/{id}','App\Http\Controllers\KertasHVSController@edit');

Route::post('/kertashvs/update','App\Http\Controllers\KertasHVSController@update');

// delete
Route::get('/kertashvs/hapus/{id}','App\Http\Controllers\KertasHVSController@hapus');

// cari
Route::get('/kertashvs/cari','App\Http\Controllers\KertasHVSController@cari');

// view
Route::get('/kertashvs/view/{id}','App\Http\Controllers\KertasHVSController@view');
