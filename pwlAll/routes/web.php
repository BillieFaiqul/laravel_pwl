<?php

use App\Http\Controllers\AboutAsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\DataMataKuliaController;
use App\Http\Controllers\DataMatakuliahController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TransaksiController;
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
Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    //semua url selain Auth dan logout
    Route::get('/', [HomeController::class, 'index']);

Route::prefix('product')->group(function() {
    Route::get('/marbel', [ProductController::class, 'index']);
});

Route::get('/news/{name}', [NewsController::class, 'index']);

Route::prefix('program')->group(function() {
    Route::get('/daftar', [ProgramController::class, 'index']);
});

Route::get('/aboutas', [AboutAsController::class, 'index']);

Route::resource('contactus', ContactUsController::class);

Route::get('/about', [AboutController::class, 'index']);

//Jobsheet 3 Prak 2

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/kuliah', [KuliahController::class, 'index']);

Route::get('/artikel', [ArtikelController::class, 'index']);

Route::resource('/hobi', HobiController::class);

Route::resource('/matakuliah', DataMatakuliahController::class);

Route::resource('/keluarga' , DataKeluargaController::class);

Route::resource('/mahasiswa', MahasiswaController::class);

Route::resource('/transaksi', TransaksiController::class);

Route::get('/mahasiswa/{id}/khs', [MahasiswaController::class, 'showKhs'])->name('showKhs');

Route::resource('articles', ArticleController::class);

Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


