<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', 'UserController@Welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

// ADMIN
Route::get('/admin/semarang', 'AdminController@Semarang')->name('semarang.read');
Route::get('/admin/data/kriteria', 'AdminController@KriteriaRead')->name('kriteria.read');
Route::get('/admin/data/kriteria/edit', 'AdminController@KriteriaEdit')->name('kriteria.edit');

// USERS
Route::get('/admin/user', 'AdminController@Pengguna')->name('pengguna.read');
Route::get('status/{id}', 'AdminController@Status')->name('status');
Route::post('/admin/user/post', 'AdminController@CreatePengguna')->name('pengguna.create');
Route::post('/admin/user/{id}/update', 'AdminController@UpdatePengguna')->name('pengguna.update');
Route::post('/admin/user/delete', 'AdminController@DeletePengguna')->name('pengguna.delete');

// PREFERENSI
Route::get('/admin/data/preferensi', 'AdminController@Preferensi')->name('preferensi.read');

// KRITERIA dan EVALUASI
Route::get('/admin/kriteria/view/{id}', 'AdminController@KriteriaView')->name('kriteria.view');
Route::post('/admin/data/kriteria/update/{id}', 'AdminController@KriteriaUpdate')->name('kriteria.update');
Route::post('/admin/evaluasi/update', 'AdminController@EvaluasiUpdate')->name('evaluasi.update');

// KLASIFIKASI
Route::get('/admin/klasifikasi', 'AdminController@Klasifikasi')->name('klasifikasi.read');
Route::post('/admin/klasifikasi/update', 'AdminController@KlasifikasiUpdate')->name('klasifikasi.update');
Route::post('/admin/klasifikasi/create', 'AdminController@KlasifikasiCreate')->name('klasifikasi.create');
Route::get('/admin/klasifikasi/delete/{id}', 'AdminController@KlasifikasiDelete')->name('klasifikasi.delete');

// PROMETHEE
Route::get('/admin/pro/alternatif', 'ProController@ViewAlternatif')->name('pro.alternatif');
Route::get('/admin/pro/deviasi', 'ProController@ViewDeviasi')->name('pro.deviasi');
Route::get('/admin/pro/indekspref', 'ProController@ViewPreferensi')->name('pro.preferensi');
Route::get('/admin/pro/leflow', 'ProController@ViewLeavingEntering')->name('pro.leavingentering');
Route::get('/admin/pro/net', 'ProController@ViewNet')->name('pro.net');

// ALTERNATIF
Route::get('/admin/data/alternatif', 'AdminController@AlternatifRead')->name('alternatif.read');
Route::get('/admin/data/alternatif/delete/{id}', 'AdminController@AlternatifDelete')->name('alternatif.delete');
Route::post('/admin/data/alternatif/update/{id}', 'AdminController@AlternatifUpdate')->name('alternatif.update');
Route::post('/admin/data/alternatif/create', 'AdminController@AlternatifCreate')->name('alternatif.create');
