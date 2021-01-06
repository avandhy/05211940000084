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

//use Illuminate\Routing\Route;

use App\Http\Controllers\PegawaiController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome'); //menampilkan file dengan nama welcome.blade.php yang ada di folder view
})->name('welcome') ;

Route::get('/coba', function () {
    return view('coba');

});

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::any('/pegawai/read/{id}', 'PegawaiController@read');

Route::get('/tugas', 'TugasController@indtugas');
Route::get('/tugas/edit/{id}', 'TugasController@edit');
Route::post('/tugas/update', 'TugasController@update');
Route::get('/tugas/tambah', 'TugasController@tambah');
Route::get('/tugas/cari', 'TugasController@cari');
Route::post('/tugas/store', 'TugasController@store');
Route::get('/tugas/cari', 'TugasController@cari');
Route::get('/tugas/hapus/{id}', 'TugasController@hapus');
