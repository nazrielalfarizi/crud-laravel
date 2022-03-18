<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/buku',[BukuController::class, 'index'])->name('buku');

Route::get('/tambahbuku',[BukuController::class, 'tambahbuku'])->name('tambahbuku');

Route::post('/insertdata',[BukuController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[BukuController::class, 'tampilkandata'])->name('tampilkandata');

Route::Post('/updatedata/{id}',[BukuController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[BukuController::class, 'delete'])->name('delete');

Route::get('/detailbuku/{id}',[BukuController::class, 'detailbuku'])->name('detailbuku');
