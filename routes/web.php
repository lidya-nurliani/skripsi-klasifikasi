<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatakenController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\PrediksiController;
use App\Http\Controllers\LaporanController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//dafken
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-dataken', [DatakenController::class, 'index'])->name('index-dataken');
Route::get('/create-dataken', [DatakenController::class, 'create'])->name('create-dataken');
Route::post('/simpan-dataken', [DatakenController::class, 'store'])->name('simpan-dataken');
Route::get('/edit-dataken/{id}', [DatakenController::class, 'edit'])->name('edit-dataken');
Route::post('/update-dataken/{id}', [DatakenController::class, 'update'])->name('update-dataken');
Route::get('/delete-dataken/{id}', [DatakenController::class, 'destroy'])->name('delete-dataken');

//dafken
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create-klasifikasi', [KlasifikasiController::class, 'create'])->name('create-klasifikasi');
Route::post('/simpan-klasifikasi', [KlasifikasiController::class, 'store'])->name('simpan-klasifikasi');
Route::get('/edit-klasifikasi/{id}', [KlasifikasiController::class, 'edit'])->name('edit-klasifikasi');
Route::post('/update-klasifikasi/{id}', [KlasifikasiController::class, 'update'])->name('update-klasifikasi');
Route::get('/delete-klasifikasi/{id}', [KlasifikasiController::class, 'destroy'])->name('delete-klasifikasi');

Route::get('/prediksi', [PrediksiController::class, 'index'])->name('prediksi');
Route::post('/hasil-prediksi', [PrediksiController::class, 'hasil'])->name('prediksi.hasil');

Route::get('/cetak-laporan-pdf', [LaporanController::class, 'cetakLaporanPDF'])->name('cetakLaporanPDF');
