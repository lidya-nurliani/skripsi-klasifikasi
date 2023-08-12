<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatakenController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\PrediksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\JenisController;

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

Auth::routes(['register'=> false]);

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//dafken
Route::get('/index-dataken', [DatakenController::class, 'index'])->name('index-dataken');

//klasifikasi
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create-klasifikasi', [KlasifikasiController::class, 'create'])->name('create-klasifikasi');

//prediksi
Route::get('/prediksi', [PrediksiController::class, 'index'])->name('prediksi');
Route::post('/hasil-prediksi', [PrediksiController::class, 'hasil'])->name('prediksi.hasil');
Route::post('/cetak-laporan-pdf', [PrediksiController::class, 'pdf'])->name('cetakLaporanPDF');
Route::post('/detailPerhitungan', [PrediksiController::class, 'detailPerhitungan'])->name('detailPerhitungan');

//profile
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::group(['middleware' => ['role:Admin']], function() {
Route::post('/simpan-klasifikasi', [KlasifikasiController::class, 'store'])->name('simpan-klasifikasi');
Route::get('/edit-klasifikasi/{id}', [KlasifikasiController::class, 'edit'])->name('edit-klasifikasi');
Route::patch('/update-klasifikasi/{id}', [KlasifikasiController::class, 'update'])->name('update-klasifikasi');
Route::delete('/delete-klasifikasi/{id}', [KlasifikasiController::class, 'destroy'])->name('delete-klasifikasi');

Route::get('/create-dataken', [DatakenController::class, 'create'])->name('create-dataken');
Route::post('/simpan-dataken', [DatakenController::class, 'store'])->name('simpan-dataken');
Route::get('/edit-dataken/{id}', [DatakenController::class, 'edit'])->name('edit-dataken');
Route::patch('/update-dataken/{id}', [DatakenController::class, 'update'])->name('update-dataken');
Route::delete('/delete-dataken/{id}', [DatakenController::class, 'destroy'])->name('delete-dataken');

Route::get('/export_excel', [DatakenController::class, 'exportexcel'])->name('export');
Route::post('/import_excel', [DatakenController::class, 'importexcel'])->name('import');

Route::get('/data-user', [ProfileController::class, 'index'])->name('data-user');
Route::get('/create-user', [ProfileController::class, 'create'])->name('create-user');
Route::post('/simpan-user', [ProfileController::class, 'store'])->name('simpan-user');
Route::get('/edit-user/{id}', [ProfileController::class, 'edit'])->name('edit-user');
Route::patch('/update-user/{id}', [ProfileController::class, 'update'])->name('update-user');
Route::delete('/delete-user/{id}', [ProfileController::class, 'destroy'])->name('delete-user');

Route::resource('merk', MerkController::class);
Route::resource('jenis', JenisController::class);
});