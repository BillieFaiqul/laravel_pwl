<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//halaman home 
Route::get('/home', function () {
    echo 'Ini adalah Halaman Home';
});

Route::prefix('products')->group(function() {
    Route::get('category/marbel-edu-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
});