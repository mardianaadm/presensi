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
    return redirect('login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'HomeController@admin');
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/jadwal', 'HomeController@jadwal');
Route::get('/kelas_siswa', 'HomeController@kelas_siswa');
Route::get('/data_guru', 'HomeController@data_guru');
Route::get('/data_siswa', 'HomeController@data_siswa');
Route::get('/data_sesi', 'HomeController@data_sesi');
// Route::get('/tahun_ajaran', 'HomeController@tahun_ajaran');

Route::resource('master_kelas', 'MasterKelasController');
Route::resource('urutan_kelas', 'UrutanKelasController');
Route::resource('tahun_ajaran', 'TahunAjaranController');
Route::resource('kelas_siswa', 'KelasSiswaController');
Route::resource('data_siswa', 'DataSiswaController');

