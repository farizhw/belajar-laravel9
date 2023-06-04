<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiswaController;
use GuzzleHttp\Middleware;
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
    return view('beranda');
});

Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/info', [MenuController::class, 'info_kegiatan']);
Route::get('/data', [MenuController::class, 'data_siswa']);
Route::resource('siswa', SiswaController::class)
    ->middleware('can:isAdmin');
Route::resource('siswa', SiswaController::class)
    ->only('show')->middleware('can:isAdminSiswa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
