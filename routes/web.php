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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@authenticate');
Route::get('/logout', 'AuthController@logout');
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'AdminController@index');
        Route::prefix('pengguna')->group(function () {
            Route::get('/{id}/show', 'PenggunaController@show');
            Route::get('/{id}/edit', 'PenggunaController@edit');
            Route::post('/{id}/edit', 'PenggunaController@update');
            Route::get('/{id}/delete', 'PenggunaController@delete');
            Route::get('/{id}/verif', 'PenggunaController@verif');
            Route::get('/{status}', 'PenggunaController@index');
        });
    });
});

Route::get('/', 'UserController@index');
Route::get('/cek_nik', 'UserController@cek_nik');
Route::get('/registrasi', 'UserController@registrasi');
Route::post('/registrasi', 'UserController@registrasi_input');
Route::get('/registrasi_success', 'UserController@registrasi_success');
Route::get('/tentang', 'UserController@tentang');
