<?php

use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

Route::resource('produk', ProdukController::class);
Route::get('produk',[ProdukController::class, 'index'])->name('produk.tampil');
Route::get('produk/create',[ProdukController::class, 'create'])->name('tambah.produk');
Route::post('produkstore',[ProdukController::class, 'store'])->name('simpan.produk');
Route::get('produk/{$id}/edit',[ProdukController::class, 'edit'])->name('edit.produk');
Route::put('produk/{$id}',[ProdukController::class, 'update'])->name('update.produk');
Route::delete('produk/{$id}',[ProdukController::class, 'delete'])->name('delete.produk');

